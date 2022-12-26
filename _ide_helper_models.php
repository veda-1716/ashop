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
 * App\Models\User
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $full_name
 * @property string|null $country
 * @property string|null $phone
 * @property string|null $billing_address
 * @property string|null $default_shipping_address
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $isAdmin
 * @property string|null $photo
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBillingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDefaultShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\aboutUs
 *
 * @property int $id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\aboutUsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|aboutUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|aboutUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|aboutUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|aboutUs whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|aboutUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|aboutUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|aboutUs whereUpdatedAt($value)
 */
	class aboutUs extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\cart
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\product $product
 * @method static \Illuminate\Database\Eloquent\Builder|cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereUserId($value)
 */
	class cart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\category
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $thumbnail
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\product[] $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\categoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|category query()
 * @method static \Illuminate\Database\Eloquent\Builder|category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|category whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|category whereUpdatedAt($value)
 */
	class category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\contactus
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\contactusFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|contactus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|contactus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|contactus query()
 * @method static \Illuminate\Database\Eloquent\Builder|contactus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|contactus whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|contactus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|contactus whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|contactus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|contactus whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|contactus whereUpdatedAt($value)
 */
	class contactus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\faq
 *
 * @property int $id
 * @property string $question
 * @property string|null $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\faqFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|faq whereUpdatedAt($value)
 */
	class faq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\likes
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\product $product
 * @method static \Illuminate\Database\Eloquent\Builder|likes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|likes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|likes query()
 * @method static \Illuminate\Database\Eloquent\Builder|likes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|likes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|likes whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|likes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|likes whereUserId($value)
 */
	class likes extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\order
 *
 * @property int $id
 * @property int $user_id
 * @property string $amount
 * @property string $shipping_address
 * @property string $order_address
 * @property string $order_email
 * @property string $order_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\order_details[] $details
 * @property-read int|null $details_count
 * @property-read \App\Models\order_details $product
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order query()
 * @method static \Illuminate\Database\Eloquent\Builder|order whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereOrderAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereOrderEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereUserId($value)
 */
	class order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\order_details
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string $price
 * @property string $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\order $order
 * @property-read \App\Models\product $product
 * @method static \Illuminate\Database\Eloquent\Builder|order_details newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order_details newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order_details query()
 * @method static \Illuminate\Database\Eloquent\Builder|order_details whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_details whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_details whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_details wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_details whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_details whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order_details whereUpdatedAt($value)
 */
	class order_details extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\product
 *
 * @property int $id
 * @property string $name
 * @property string $weight
 * @property string $price
 * @property string $description
 * @property string $image
 * @property int $category_id
 * @property string $thumbnail
 * @property string $stock
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\category|null $category
 * @property-read \App\Models\likes|null $likes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\order_details[] $order_details
 * @property-read int|null $order_details_count
 * @method static \Database\Factories\productFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|product query()
 * @method static \Illuminate\Database\Eloquent\Builder|product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereWeight($value)
 */
	class product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\subscriber
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\subscriberFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subscriber whereUpdatedAt($value)
 */
	class subscriber extends \Eloquent {}
}

