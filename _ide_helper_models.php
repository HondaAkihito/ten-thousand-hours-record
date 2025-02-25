<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\PostForm
 *
 * @property int $id
 * @property string $date
 * @property int $study_seconds
 * @property int $status
 * @property string|null $comment
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\PostFormFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm whereStudySeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostForm whereUserId($value)
 */
	class PostForm extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PostForm> $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

