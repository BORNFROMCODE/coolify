<?php

namespace App\Models;

class Project extends BaseModel
{
    protected static function booted()
    {
        static::created(function ($project) {
            ProjectSetting::create([
                'project_id' => $project->id,
            ]);
            Environment::create([
                'name' => 'Production',
                'project_id' => $project->id,
            ]);
        });
    }
    protected $fillable = [
        'name',
        'description',
        'team_id',
        'project_id'
    ];
    static public function ownedByCurrentTeam()
    {
        return Project::whereTeamId(session('currentTeam')->id)->orderBy('name');
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function environments()
    {
        return $this->hasMany(Environment::class);
    }
    public function settings()
    {
        return $this->hasOne(ProjectSetting::class);
    }
    public function applications()
    {
        return $this->hasManyThrough(Application::class, Environment::class);
    }
}
