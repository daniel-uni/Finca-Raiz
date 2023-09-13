<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $name_depart
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereNameDepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Property
 *
 * @property int $id
 * @property string $name_prop
 * @property string $address_prop
 * @property string $price_prop
 * @property string $sale_prop
 * @property string $type_prop
 * @property string $bedroom_prop
 * @property string $bathroom_prop
 * @property string $parking_prop
 * @property string $area_prop
 * @property string $stratum_prop
 * @property string $antiquity_prop
 * @property string $floor_prop
 * @property string $admin_prop
 * @property int $user_id
 * @property int $departament_id
 * @property int $id_real_agency
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAddressProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAdminProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAntiquityProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAreaProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBathroomProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBedroomProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereDepartamentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereFloorProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereIdRealAgency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereNameProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereParkingProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePriceProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereSaleProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereStratumProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereTypeProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUserId($value)
 */
	class Property extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RealEstateAgency
 *
 * @property int $id
 * @property string $name_real
 * @property string $address_real
 * @property string $phone_real
 * @property string $email_real
 * @property string $gain_real
 * @property string $fixed_phone_real
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency query()
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency whereAddressReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency whereEmailReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency whereFixedPhoneReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency whereGainReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency whereNameReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency wherePhoneReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RealEstateAgency whereUpdatedAt($value)
 */
	class RealEstateAgency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Resset
 *
 * @property string $email
 * @property string $token
 * @property string|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|Resset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Resset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Resset query()
 * @method static \Illuminate\Database\Eloquent\Builder|Resset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resset whereToken($value)
 */
	class Resset extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rol
 *
 * @property int $id
 * @property string $name_rol
 * @property int $validate_rol
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Rol newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rol newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rol query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rol whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rol whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rol whereNameRol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rol whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rol whereValidateRol($value)
 */
	class Rol extends \Eloquent {}
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
 * @property string|null $address
 * @property string|null $phone
 * @property int $validate
 * @property int $rol_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereValidate($value)
 */
	class User extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

