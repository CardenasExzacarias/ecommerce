<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = [
            0 => [
                'name' => 'Glass',
                'description' => "It's just a water glass"
            ],
            1 => [
                'name' => 'Laptop',
                'description' => 'Stay productive and connected with this sleek laptop, featuring a high-resolution screen, fast processor, and ample storage for all your work and entertainment needs.'
            ],
            2 => [
                'name' => 'Smartphone',
                'description' => 'Capture stunning photos, stay connected, and enjoy seamless performance with this powerful smartphone equipped with the latest features and a sleek design.'
            ],
            3 => [
                'name' => 'Tablet',
                'description' => 'Portable and versatile, this tablet is perfect for browsing, watching videos, and productivity on the go. With a high-quality display and long battery life, it’s a perfect companion.'
            ],
            4 => [
                'name' => 'Headphones',
                'description' => 'Immerse yourself in high-quality sound with these noise-canceling headphones. Ideal for music lovers, travelers, and anyone looking for a premium listening experience.'
            ],
            5 => [
                'name' => 'Smartwatch',
                'description' => 'Keep track of your health, notifications, and daily activities with this stylish smartwatch. It’s your ultimate companion for fitness and productivity.'
            ],
            6 => [
                'name' => 'Camera',
                'description' => 'Capture every moment in vivid detail with this high-performance digital camera, perfect for both amateur and professional photographers.'
            ],
            7 => [
                'name' => 'Monitor',
                'description' => 'Enhance your productivity or entertainment with this large, ultra-clear monitor. Perfect for gaming, design, or office work.'
            ],
            8 => [
                'name' => 'Keyboard',
                'description' => 'Type comfortably and efficiently with this ergonomic keyboard, designed for long typing sessions and featuring customizable keys.'
            ],
            9 => [
                'name' => 'Mouse',
                'description' => 'Navigate your device with precision and ease using this ergonomic mouse, designed for smooth control and comfort during long work or gaming sessions.'
            ],
            10 => [
                'name' => 'Printer',
                'description' => 'Print high-quality documents and photos with this reliable printer, designed for both home and office use with fast printing speeds.'
            ],
            11 => [
                'name' => 'TV',
                'description' => 'Enjoy stunning visuals and immersive sound with this high-definition television, perfect for movie nights, sports, and gaming.'
            ],
            12 => [
                'name' => 'Refrigerator',
                'description' => 'Keep your food fresh and organized with this spacious refrigerator, featuring energy-efficient technology and a sleek design to complement your kitchen.'
            ],
            13 => [
                'name' => 'Washing Machine',
                'description' => 'Make laundry day easier with this energy-efficient washing machine, designed to clean clothes thoroughly while saving water and electricity.'
            ],
            14 => [
                'name' => 'Dishwasher',
                'description' => 'Say goodbye to dishwashing chores with this efficient dishwasher, offering quick, quiet cleaning while saving time and water.'
            ],
            15 => [
                'name' => 'Microwave Oven',
                'description' => 'Heat up your meals in seconds with this powerful microwave oven. Featuring multiple settings and a spacious interior for all your cooking needs.'
            ],
            16 => [
                'name' => 'Blender',
                'description' => 'Create smoothies, soups, and more with this powerful blender, designed for both versatility and ease of use in your kitchen.'
            ],
            17 => [
                'name' => 'Coffee Maker',
                'description' => 'Brew your perfect cup of coffee every morning with this user-friendly coffee maker, designed to extract rich flavor with ease.'
            ],
            18 => [
                'name' => 'Toaster',
                'description' => 'Enjoy crispy, golden toast every time with this durable toaster, featuring multiple browning settings to suit your taste.'
            ],
            19 => [
                'name' => 'Air Conditioner',
                'description' => 'Stay cool and comfortable in the hottest weather with this energy-efficient air conditioner, offering powerful cooling for large rooms.'
            ],
            20 => [
                'name' => 'Heater',
                'description' => 'Keep your home warm and cozy with this compact and efficient heater, perfect for cold winter months and small to medium-sized rooms.'
            ],
            21 => [
                'name' => 'Vacuum Cleaner',
                'description' => 'Clean every corner of your home with ease using this powerful vacuum cleaner, designed for efficient dust and dirt removal on all floor types.'
            ],
            22 => [
                'name' => 'Fan',
                'description' => 'Beat the heat with this high-performance fan, ideal for creating a cool breeze during hot summer days with multiple speed settings.'
            ],
            23 => [
                'name' => 'Electric Kettle',
                'description' => 'Quickly boil water for tea, coffee, or cooking with this fast-heating electric kettle, featuring an automatic shut-off and safety features.'
            ],
            24 => [
                'name' => 'Iron',
                'description' => 'Get wrinkle-free clothes with this powerful iron, designed with a steam function to make ironing faster and more efficient.'
            ],
            25 => [
                'name' => 'Hair Dryer',
                'description' => 'Achieve salon-quality results at home with this powerful hair dryer, designed to dry your hair quickly while minimizing damage.'
            ],
            26 => [
                'name' => 'Electric Toothbrush',
                'description' => 'Maintain a sparkling smile with this advanced electric toothbrush, featuring multiple modes and a timer to help improve your brushing routine.'
            ],
            27 => [
                'name' => 'Shaver',
                'description' => 'Experience a smooth and close shave with this rechargeable shaver, designed for comfort and efficiency with a long-lasting battery.'
            ],
            28 => [
                'name' => 'Razor',
                'description' => 'Achieve a clean and precise shave every time with this high-quality razor, featuring sharp blades and ergonomic design for a comfortable grip.'
            ],
            29 => [
                'name' => 'Water Purifier',
                'description' => 'Enjoy clean, safe drinking water with this advanced water purifier, designed to remove impurities and contaminants for fresh water every time.'
            ],
            30 => [
                'name' => 'Humidifier',
                'description' => 'Maintain the perfect indoor humidity levels with this sleek and quiet humidifier, ideal for dry climates or enhancing comfort during the winter.'
            ],
            31 => [
                'name' => 'Dehumidifier',
                'description' => 'Eliminate excess moisture in your home with this efficient dehumidifier, helping to reduce mold and mildew while keeping the air fresh and comfortable.'
            ],
            32 => [
                'name' => 'Sewing Machine',
                'description' => 'Sew clothes, home décor, and crafts with ease using this user-friendly sewing machine, perfect for both beginners and experienced seamstresses.'
            ],
            33 => [
                'name' => 'Electric Grill',
                'description' => 'Grill your favorite meats and vegetables indoors with this compact and powerful electric grill, designed for convenience and easy cleanup.'
            ],
            34 => [
                'name' => 'Rice Cooker',
                'description' => 'Cook perfect rice every time with this reliable rice cooker, featuring multiple cooking functions and an automatic keep-warm setting.'
            ],
            35 => [
                'name' => 'Pressure Cooker',
                'description' => 'Prepare meals faster and retain more nutrients with this efficient pressure cooker, designed to speed up cooking times and tenderize meats.'
            ],
            36 => [
                'name' => 'Food Processor',
                'description' => 'Chop, slice, dice, and blend ingredients in seconds with this versatile food processor, designed for quick meal prep and cooking ease.'
            ],
            37 => [
                'name' => 'Stand Mixer',
                'description' => 'Mix, knead, and whip with ease using this powerful stand mixer, ideal for baking enthusiasts and those who love preparing homemade treats.'
            ],
            38 => [
                'name' => 'Slow Cooker',
                'description' => 'Prepare hearty meals effortlessly with this slow cooker, perfect for stews, soups, and roasts. Let it do the cooking while you enjoy your day.'
            ],
            39 => [
                'name' => 'Juicer',
                'description' => 'Freshly squeeze your favorite fruits and vegetables with this easy-to-use juicer, designed to help you stay healthy and enjoy homemade juices.'
            ],
            40 => [
                'name' => 'Electric Stove',
                'description' => 'Cook your favorite meals with precision using this energy-efficient electric stove, featuring multiple burners and easy-to-clean surfaces.'
            ],
            41 => [
                'name' => 'Microwave',
                'description' => 'Heat and cook meals quickly with this microwave oven, offering multiple cooking presets and a spacious interior for convenience.'
            ],
            42 => [
                'name' => 'Mini Fridge',
                'description' => 'Keep snacks and beverages chilled in small spaces with this compact mini fridge, perfect for dorm rooms, offices, and apartments.'
            ],
            43 => [
                'name' => 'Portable Speaker',
                'description' => 'Take your music anywhere with this portable speaker, designed for high-quality sound, durability, and easy Bluetooth connectivity.'
            ],
            44 => [
                'name' => 'Smart Light Bulb',
                'description' => 'Create the perfect ambiance with this smart light bulb, offering adjustable brightness and color options, all controlled from your smartphone.'
            ],
            45 => [
                'name' => 'Smart Thermostat',
                'description' => 'Control your home’s temperature from anywhere with this smart thermostat, designed to save energy while providing comfort throughout the day.'
            ],
            46 => [
                'name' => 'Home Security Camera',
                'description' => 'Monitor your home in real-time with this high-definition security camera, offering motion detection, night vision, and easy integration with smart devices.'
            ],
            47 => [
                'name' => 'Smoke Detector',
                'description' => 'Ensure your home’s safety with this reliable smoke detector, designed to alert you in case of smoke or fire for peace of mind.'
            ],
            48 => [
                'name' => 'Alarm System',
                'description' => 'Protect your home with this comprehensive alarm system, offering motion sensors, door/window detectors, and remote monitoring capabilities.'
            ],
            49 => [
                'name' => 'Smart Lock',
                'description' => 'Secure your home with this smart lock, which allows you to lock and unlock doors remotely from your phone, while also offering keyless entry for convenience.'
            ],
            50 => [
                'name' => 'Doorbell Camera',
                'description' => 'See who’s at your door with this doorbell camera, featuring video streaming, motion detection, and two-way audio to communicate with visitors from anywhere.'
            ],
            51 => [
                'name' => 'Projector',
                'description' => 'Transform any space into a home theater with this portable projector, offering high-definition visuals and easy connectivity to your devices.'
            ],
            52 => [
                'name' => 'Soundbar',
                'description' => 'Enhance your TV audio with this sleek soundbar, designed to deliver clear, powerful sound and immersive surround sound experiences.'
            ],
            53 => [
                'name' => 'Gaming Console',
                'description' => 'Dive into the world of gaming with this high-performance gaming console, featuring stunning graphics and an expansive library of games.'
            ],
            54 => [
                'name' => 'VR Headset',
                'description' => 'Immerse yourself in virtual reality with this VR headset, offering lifelike experiences and a wide range of interactive games and applications.'
            ],
            55 => [
                'name' => 'Bluetooth Speaker',
                'description' => 'Enjoy your favorite music wirelessly with this Bluetooth speaker, delivering high-quality sound in a portable, easy-to-carry design.'
            ],
            56 => [
                'name' => 'Smart Glasses',
                'description' => 'See the world in a whole new way with these smart glasses, offering augmented reality features, voice control, and seamless connectivity to your devices.'
            ],
            57 => [
                'name' => 'Smart Fridge',
                'description' => 'Keep your food fresh and organized with this smart fridge, featuring a touchscreen interface, smart inventory tracking, and energy-efficient cooling.'
            ],
            58 => [
                'name' => 'Coffee Grinder',
                'description' => 'Grind your coffee beans to perfection with this electric coffee grinder, designed for consistent results and enhancing the flavor of your coffee.'
            ],
            59 => [
                'name' => 'Robot Vacuum',
                'description' => 'Let this robot vacuum clean your floors while you relax. With advanced navigation and powerful suction, it makes cleaning effortless.'
            ],
            60 => [
                'name' => 'Massage Chair',
                'description' => 'Relax and unwind with this premium massage chair, featuring multiple massage modes and adjustable settings to soothe tired muscles and improve circulation.'
            ],
            61 => [
                'name' => 'Electric Skillet',
                'description' => 'Cook your favorite meals with ease using this electric skillet, designed for even heat distribution and versatile cooking from frying to simmering.'
            ],
            62 => [
                'name' => 'Blender Bottle',
                'description' => 'Shake up your protein shakes and smoothies with this durable and leak-proof blender bottle, featuring a mixing ball to ensure a smooth blend.'
            ],
            63 => [
                'name' => 'Electric Shaver',
                'description' => 'Achieve a smooth shave with this electric shaver, offering quick results and skin-friendly technology for a comfortable grooming experience.'
            ],
            64 => [
                'name' => 'Portable Charger',
                'description' => 'Keep your devices powered up on the go with this compact portable charger, designed to charge your phone, tablet, or other electronics when you need it most.'
            ],
            65 => [
                'name' => 'Power Bank',
                'description' => 'Never run out of power with this high-capacity power bank, designed to charge multiple devices quickly while on the move.'
            ],
            66 => [
                'name' => 'Solar Panel',
                'description' => 'Harness the power of the sun with this efficient solar panel, designed to provide renewable energy for your home or portable devices.'
            ],
            67 => [
                'name' => 'Electric Bike',
                'description' => 'Ride effortlessly with this electric bike, featuring a powerful motor and long-lasting battery for smooth, eco-friendly commutes.'
            ],
            68 => [
                'name' => 'Hoverboard',
                'description' => 'Zoom around in style with this self-balancing hoverboard, featuring smooth control, a durable design, and a fun way to travel short distances.'
            ],
            69 => [
                'name' => 'Electric Scooter',
                'description' => 'Enjoy a fast and eco-friendly ride with this electric scooter, offering a convenient mode of transportation with long battery life and smooth handling.'
            ],
            70 => [
                'name' => 'Smart Scale',
                'description' => 'Track your health and fitness progress with this smart scale, measuring weight, body fat, muscle mass, and more, synced to your phone for easy monitoring.'
            ],
            71 => [
                'name' => 'Fitness Tracker',
                'description' => 'Stay on top of your fitness goals with this advanced fitness tracker, offering heart rate monitoring, step counting, sleep tracking, and more.'
            ],
            72 => [
                'name' => 'Yoga Mat',
                'description' => 'Enhance your yoga practice with this non-slip yoga mat, designed for comfort, durability, and support during your stretches and poses.'
            ],
            73 => [
                'name' => 'Resistance Bands',
                'description' => 'Build strength and improve flexibility with this set of resistance bands, perfect for home workouts and easily adjustable for various exercises.'
            ],
            74 => [
                'name' => 'Dumbbells',
                'description' => 'Strengthen and tone your muscles with these durable dumbbells, designed for effective home workouts and available in a variety of weights.'
            ],
            75 => [
                'name' => 'Treadmill',
                'description' => 'Stay fit and active with this high-quality treadmill, featuring adjustable speeds, incline options, and built-in programs for a customized workout.'
            ],
            76 => [
                'name' => 'Elliptical Machine',
                'description' => 'Get a full-body workout with this smooth and quiet elliptical machine, designed to improve cardiovascular health and muscle endurance.'
            ],
            77 => [
                'name' => 'Rowing Machine',
                'description' => 'Achieve an efficient full-body workout with this rowing machine, designed to simulate rowing and target multiple muscle groups with low impact.'
            ],
            78 => [
                'name' => 'Exercise Bike',
                'description' => 'Ride your way to fitness with this sturdy exercise bike, offering adjustable resistance levels and a comfortable seat for long workouts.'
            ],
            79 => [
                'name' => 'Stepper',
                'description' => 'Improve your cardiovascular fitness and tone your lower body with this compact and effective stepper, perfect for home workouts.'
            ],
            80 => [
                'name' => 'Kettlebell',
                'description' => 'Boost your strength and endurance with this versatile kettlebell, ideal for strength training, conditioning, and full-body workouts.'
            ],
            81 => [
                'name' => 'Exercise Ball',
                'description' => 'Enhance your core strength and balance with this durable exercise ball, perfect for stability exercises, yoga, and Pilates.'
            ],
            82 => [
                'name' => 'Jump Rope',
                'description' => 'Take your cardio workout to the next level with this lightweight jump rope, designed for speed, comfort, and endurance training.'
            ],
            83 => [
                'name' => 'Boxing Gloves',
                'description' => 'Get ready to train in style with these high-quality boxing gloves, offering superior protection and comfort during intense training sessions.'
            ],
            84 => [
                'name' => 'Gym Bag',
                'description' => 'Carry your workout gear in style with this spacious and durable gym bag, featuring multiple compartments for organization and easy access.'
            ],
            85 => [
                'name' => 'Water Bottle',
                'description' => 'Stay hydrated during workouts with this leak-proof water bottle, designed for easy sipping and durable enough to withstand intense exercise routines.'
            ],
            86 => [
                'name' => 'Yoga Block',
                'description' => 'Enhance your yoga poses and stretches with this supportive yoga block, offering stability and proper alignment for deeper poses.'
            ],
            87 => [
                'name' => 'Foam Roller',
                'description' => 'Relieve muscle tension and improve flexibility with this high-density foam roller, designed to target sore muscles and aid in recovery.'
            ],
            88 => [
                'name' => 'Massage Gun',
                'description' => 'Relieve muscle soreness and improve circulation with this portable massage gun, offering multiple intensity settings for a deep tissue massage experience.'
            ],
            89 => [
                'name' => 'Home Gym Equipment',
                'description' => 'Create your own fitness studio at home with this versatile set of home gym equipment, featuring weights, resistance bands, and more for a full-body workout.'
            ],
            90 => [
                'name' => 'Tennis Racket',
                'description' => 'Play like a pro with this lightweight and durable tennis racket, designed for precision, control, and powerful swings on the court.'
            ],
            91 => [
                'name' => 'Golf Club',
                'description' => 'Perfect your swing with this high-performance golf club, engineered for accuracy, distance, and comfort on the golf course.'
            ],
            92 => [
                'name' => 'Baseball Bat',
                'description' => 'Hit home runs with this premium baseball bat, crafted for speed, power, and precision to take your game to the next level.'
            ],
            93 => [
                'name' => 'Football',
                'description' => 'Get in the game with this high-quality football, designed for excellent grip, durability, and performance during intense matches.'
            ],
            94 => [
                'name' => 'Soccer Ball',
                'description' => 'Score goals and practice your skills with this durable soccer ball, perfect for recreational play or competitive matches.'
            ],
            95 => [
                'name' => 'Basketball',
                'description' => 'Take your game to the hoop with this professional-grade basketball, designed for optimal bounce and grip during intense play.'
            ],
            96 => [
                'name' => 'Tennis Ball',
                'description' => 'Practice your serves and volleys with these durable tennis balls, engineered for consistency and reliable performance on the court.'
            ],
            97 => [
                'name' => 'Badminton Racket',
                'description' => 'Play badminton like a pro with this lightweight and durable badminton racket, offering precision and power for fast-paced matches.'
            ],
            98 => [
                'name' => 'Hockey Stick',
                'description' => 'Dominate the rink with this sturdy and flexible hockey stick, designed for powerful shots and superior control during games.'
            ],
            99 => [
                'name' => 'Baseball Glove',
                'description' => 'Catch with ease using this well-crafted baseball glove, designed for comfort and a perfect fit while making those game-winning catches.'
            ],
            100 => [
                'name' => 'Golf Ball',
                'description' => 'Perfect your shot with these premium golf balls, offering optimal distance, accuracy, and durability on the course.'
            ],
            101 => [
                'name' => 'Skateboard',
                'description' => 'Hit the streets with this durable skateboard, designed for smooth rides, great control, and fun tricks.'
            ],
            102 => [
                'name' => 'Surfboard',
                'description' => 'Catch the perfect wave with this lightweight and stable surfboard, designed for both beginners and experienced surfers.'
            ],
            103 => [
                'name' => 'Scooter',
                'description' => 'Zip around with ease on this lightweight scooter, offering smooth rides, easy control, and a fun way to get around.'
            ],
            104 => [
                'name' => 'Running Shoes',
                'description' => 'Achieve your best run with these high-performance running shoes, designed for comfort, support, and shock absorption.'
            ],
            105 => [
                'name' => 'Cycling Shoes',
                'description' => 'Enhance your cycling experience with these specially designed cycling shoes, offering superior grip and pedaling efficiency.'
            ],
            106 => [
                'name' => 'CrossFit Shoes',
                'description' => 'Push your limits with these durable CrossFit shoes, designed to handle intense workouts and provide comfort during dynamic movements.'
            ],
            107 => [
                'name' => 'Climbing Shoes',
                'description' => 'Scale new heights with these climbing shoes, engineered for precision, comfort, and optimal grip on any surface.'
            ],
            108 => [
                'name' => 'Tennis Shoes',
                'description' => 'Play your best game with these tennis shoes, designed for comfort, flexibility, and grip during fast-paced matches.'
            ],
            109 => [
                'name' => 'Football Cleats',
                'description' => 'Dominate the field with these high-performance football cleats, designed for traction, support, and agility during intense play.'
            ],
            110 => [
                'name' => 'Baseball Cleats',
                'description' => 'Run the bases with confidence in these durable baseball cleats, offering optimal grip, comfort, and performance on the field.'
            ],
            111 => [
                'name' => 'Soccer Cleats',
                'description' => 'Take your soccer game to the next level with these lightweight soccer cleats, providing traction, speed, and agility on the field.'
            ],
            112 => [
                'name' => 'Golf Shoes',
                'description' => 'Walk the course in comfort with these stylish and durable golf shoes, designed for grip and support throughout your game.'
            ],
            113 => [
                'name' => 'Work Boots',
                'description' => 'Stay safe and comfortable on the job with these rugged work boots, offering durability, support, and protection for tough work environments.'
            ],
            114 => [
                'name' => 'Casual Shoes',
                'description' => 'Enjoy everyday comfort with these stylish casual shoes, offering versatility, comfort, and a great look for any occasion.'
            ],
            115 => [
                'name' => 'Flip Flops',
                'description' => 'Stay cool and comfortable in these easy-to-wear flip flops, perfect for the beach, pool, or casual outings.'
            ],
            116 => [
                'name' => 'High Heels',
                'description' => 'Elevate your style with these chic high heels, designed for both comfort and fashion to complement any outfit.'
            ],
            117 => [
                'name' => 'Boots',
                'description' => 'Step out in style and comfort with these durable boots, offering a sleek design and superior protection for outdoor activities.'
            ],
            118 => [
                'name' => 'Sneakers',
                'description' => 'Stay active and stylish with these versatile sneakers, perfect for running, gym workouts, or casual everyday wear.'
            ],
            119 => [
                'name' => 'Loafers',
                'description' => 'Add a touch of elegance to your wardrobe with these comfortable and sophisticated loafers, ideal for both formal and casual settings.'
            ],
            120 => [
                'name' => 'Dress Shoes',
                'description' => 'Look sharp with these classic dress shoes, designed for style, comfort, and durability for formal occasions and business meetings.'
            ],
            121 => [
                'name' => 'Sandals',
                'description' => 'Stay cool in warm weather with these comfortable and breathable sandals, offering style and support for all your outdoor adventures.'
            ],
            122 => [
                'name' => 'Slippers',
                'description' => 'Relax in comfort with these cozy slippers, designed to keep your feet warm and comfortable around the house.'
            ],
            123 => [
                'name' => 'Wedges',
                'description' => 'Add a little height and a lot of style with these trendy wedges, perfect for both casual and dressy outfits.'
            ],
            124 => [
                'name' => 'Ballet Flats',
                'description' => 'Achieve effortless style with these comfortable ballet flats, offering a sleek and minimalist design for everyday wear.'
            ],
            125 => [
                'name' => 'Athletic Shoes',
                'description' => 'Maximize your performance with these high-quality athletic shoes, designed for running, training, and sports activities.'
            ],
            126 => [
                'name' => 'Orthopedic Shoes',
                'description' => 'Experience all-day comfort with these orthopedic shoes, designed to provide support and relief for individuals with foot or joint issues.'
            ],
            127 => [
                'name' => 'Water Shoes',
                'description' => 'Enjoy water activities with these quick-drying water shoes, designed for comfort, flexibility, and protection in wet environments.'
            ],
            128 => [
                'name' => 'Rain Boots',
                'description' => 'Stay dry and stylish in these waterproof rain boots, perfect for wet weather, gardening, or outdoor adventures.'
            ],
            129 => [
                'name' => 'Snow Boots',
                'description' => 'Keep your feet warm and dry in harsh winter conditions with these insulated snow boots, designed for snow and ice protection.'
            ],
            130 => [
                'name' => 'Biking Gloves',
                'description' => 'Protect your hands and improve grip with these padded biking gloves, designed for comfort and control during long rides.'
            ],
            131 => [
                'name' => 'Running Shorts',
                'description' => 'Stay cool and comfortable during your runs with these breathable running shorts, designed for maximum mobility and comfort.'
            ],
            132 => [
                'name' => 'Track Pants',
                'description' => 'Perfect for running or casual wear, these track pants offer a relaxed fit and great flexibility for all your activities.'
            ],
            133 => [
                'name' => 'Sports Bra',
                'description' => 'Feel supported during your workouts with this comfortable and breathable sports bra, designed for active women.'
            ],
            134 => [
                'name' => 'Compression Socks',
                'description' => 'Boost your circulation and comfort with these compression socks, perfect for athletes or long travel days.'
            ],
            135 => [
                'name' => 'Sweatband',
                'description' => 'Keep sweat out of your eyes with this soft and comfortable sweatband, ideal for sports, exercise, or hot days.'
            ],
            136 => [
                'name' => 'Sunglasses',
                'description' => 'Protect your eyes and look stylish with these high-quality sunglasses, designed to block harmful UV rays and enhance your outdoor experience.'
            ],
            137 => [
                'name' => 'Sun Hat',
                'description' => 'Stay cool and shielded from the sun with this wide-brimmed sun hat, perfect for outdoor adventures and beach days.'
            ],
            138 => [
                'name' => 'Scarf',
                'description' => 'Add an extra layer of warmth and style with this soft and cozy scarf, perfect for cooler weather and layering.'
            ],
            139 => [
                'name' => 'Gloves',
                'description' => 'Keep your hands warm and protected during cold weather with these insulated gloves, designed for comfort and warmth.'
            ],
            140 => [
                'name' => 'Beanie',
                'description' => 'Stay warm and stylish in this snug beanie, perfect for winter, outdoor activities, or casual wear.'
            ],
            141 => [
                'name' => 'Leather Jacket',
                'description' => 'Look sharp and feel confident in this classic leather jacket, designed for both style and durability.'
            ],
            142 => [
                'name' => 'Denim Jacket',
                'description' => 'Bring a timeless, rugged look to your wardrobe with this versatile denim jacket, great for layering over any outfit.'
            ],
            143 => [
                'name' => 'T-shirt',
                'description' => 'This comfortable and stylish T-shirt is perfect for casual wear, available in a variety of colors and designs.'
            ],
            144 => [
                'name' => 'Jeans',
                'description' => 'These durable and stylish jeans offer a great fit, versatility, and comfort for any occasion.'
            ],
            145 => [
                'name' => 'Sweater',
                'description' => 'Stay cozy and stylish in this soft sweater, designed to keep you warm and comfortable during cooler months.'
            ],
            146 => [
                'name' => 'Hoodie',
                'description' => 'Perfect for layering, this cozy hoodie offers warmth and comfort with a relaxed fit and convenient pockets.'
            ],
            147 => [
                'name' => 'Button-up Shirt',
                'description' => 'Elevate your look with this crisp and clean button-up shirt, perfect for both casual and formal occasions.'
            ],
            148 => [
                'name' => 'Blouse',
                'description' => 'Add a touch of elegance to your outfit with this light, breathable blouse, perfect for both work and play.'
            ],
            149 => [
                'name' => 'Polo Shirt',
                'description' => 'Stay cool and stylish in this classic polo shirt, perfect for casual outings, sports, or relaxed office wear.'
            ],
            150 => [
                'name' => 'Vest',
                'description' => 'Layer up with this comfortable and versatile vest, perfect for adding an extra layer of warmth without bulk.'
            ],
            151 => [
                'name' => 'Overalls',
                'description' => 'This trendy and functional pair of overalls is perfect for a laid-back, casual look or for working outdoors.'
            ],
            152 => [
                'name' => 'Chinos',
                'description' => 'Add a refined yet casual touch to your wardrobe with these comfortable and stylish chinos, perfect for work or casual outings.'
            ],
            153 => [
                'name' => 'Cargo Pants',
                'description' => 'These durable cargo pants offer plenty of pocket space and comfort, making them ideal for outdoor activities or casual wear.'
            ],
            154 => [
                'name' => 'Leggings',
                'description' => 'These comfortable and stretchy leggings offer a perfect fit for any activity, from workouts to lounging at home.'
            ],
            155 => [
                'name' => 'Shorts',
                'description' => 'Stay cool during the summer months with these stylish and comfortable shorts, perfect for casual wear or outdoor activities.'
            ],
            156 => [
                'name' => 'Swimwear',
                'description' => 'Get ready for the beach or pool with this high-quality swimwear, designed for comfort, style, and durability.'
            ],
            157 => [
                'name' => 'Bathrobe',
                'description' => 'Wrap yourself in comfort with this soft and plush bathrobe, perfect for lounging at home after a bath or shower.'
            ],
            158 => [
                'name' => 'Pajamas',
                'description' => 'Sleep comfortably in these soft and cozy pajamas, designed to keep you relaxed all night long.'
            ],
            159 => [
                'name' => 'Lingerie',
                'description' => 'Feel confident and beautiful in this luxurious lingerie, designed for comfort and elegance.'
            ],
            160 => [
                'name' => 'Socks',
                'description' => 'Keep your feet comfortable and supported with these soft and durable socks, perfect for everyday wear or exercise.'
            ],
            161 => [
                'name' => 'Tights',
                'description' => 'Add a smooth finish to your outfit with these stretchy and comfortable tights, perfect for layering or as a standalone piece.'
            ],
            162 => [
                'name' => 'Jumpsuit',
                'description' => 'This stylish and versatile jumpsuit is perfect for any occasion, offering comfort and chic elegance in one piece.'
            ],
            163 => [
                'name' => 'Trench Coat',
                'description' => 'Add a sophisticated touch to your outfit with this timeless trench coat, designed to keep you warm and stylish.'
            ],
            164 => [
                'name' => 'Rain Jacket',
                'description' => 'Stay dry and comfortable with this lightweight rain jacket, perfect for unpredictable weather.'
            ],
            165 => [
                'name' => 'Peacoat',
                'description' => 'This classic peacoat combines style and warmth, ideal for cold weather while maintaining a sharp, elegant look.'
            ],
            166 => [
                'name' => 'Down Jacket',
                'description' => 'Stay warm during the winter months with this insulated down jacket, perfect for layering in cold weather.'
            ],
            167 => [
                'name' => 'Parkas',
                'description' => 'This rugged parka is built for harsh winter conditions, offering warmth, protection, and style in extreme cold.'
            ],
            168 => [
                'name' => 'Winter Coat',
                'description' => 'Layer up for the cold with this stylish winter coat, designed to provide warmth and comfort during freezing temperatures.'
            ],
            169 => [
                'name' => 'Fleece Jacket',
                'description' => 'This cozy fleece jacket provides warmth without the bulk, perfect for casual outings or outdoor activities.'
            ],
            170 => [
                'name' => 'Cardigan',
                'description' => 'This soft and comfortable cardigan is a must-have layering piece, ideal for adding warmth to any outfit.'
            ],
            171 => [
                'name' => 'Suits',
                'description' => 'Look sharp in this well-tailored suit, designed for formal occasions or professional settings, offering comfort and style.'
            ],
            172 => [
                'name' => 'Blazers',
                'description' => 'This classic blazer adds a polished touch to any outfit, perfect for both business and casual occasions.'
            ],
            173 => [
                'name' => 'Tuxedo',
                'description' => 'Be the epitome of elegance with this stylish tuxedo, perfect for formal events, weddings, or any black-tie occasion.'
            ],
            174 => [
                'name' => 'Kilt',
                'description' => 'Embrace tradition with this well-crafted kilt, perfect for cultural events or special occasions.'
            ],
            175 => [
                'name' => 'Dress Shirt',
                'description' => 'A crisp and classic dress shirt, perfect for both professional and casual settings.'
            ],
            176 => [
                'name' => 'Cufflinks',
                'description' => 'Add a touch of sophistication to your dress shirt with these elegant cufflinks, ideal for formal occasions.'
            ],
            177 => [
                'name' => 'Tie',
                'description' => 'This stylish tie is a great addition to any professional wardrobe, offering a refined look for business and formal events.'
            ],
            178 => [
                'name' => 'Bowtie',
                'description' => 'A classic bowtie that offers a sophisticated, timeless look for any formal or semi-formal occasion.'
            ],
            179 => [
                'name' => 'Suspenders',
                'description' => 'These sturdy suspenders add a vintage touch to your outfit, offering both function and style for formal events.'
            ],
            180 => [
                'name' => 'Belt',
                'description' => 'This classic belt is an essential accessory for any wardrobe, providing both style and functionality.'
            ],
            181 => [
                'name' => 'Pants Belt',
                'description' => 'This sleek pants belt is designed to keep your trousers in place while adding a polished look to your outfit.'
            ],
            182 => [
                'name' => 'Wallet',
                'description' => 'Keep your essentials organized and stylish with this durable leather wallet, designed for both men and women.'
            ],
            183 => [
                'name' => 'Clutch',
                'description' => 'This elegant clutch is perfect for formal occasions, offering a compact and stylish way to carry your essentials.'
            ],
            184 => [
                'name' => 'Handbag',
                'description' => 'This fashionable handbag offers both style and functionality, perfect for daily use or going out.'
            ],
            185 => [
                'name' => 'Backpack',
                'description' => 'Carry your belongings comfortably with this versatile and spacious backpack, perfect for school, work, or travel.'
            ],
            186 => [
                'name' => 'Laptop Bag',
                'description' => 'Protect your laptop and stay organized with this sleek and durable laptop bag, ideal for professionals and students.'
            ],
            187 => [
                'name' => 'Tote Bag',
                'description' => 'This stylish tote bag is perfect for carrying everything you need, whether for work, shopping, or a day at the beach.'
            ],
            188 => [
                'name' => 'Diaper Bag',
                'description' => 'Stay organized on the go with this spacious diaper bag, designed with multiple compartments to hold all your baby essentials.'
            ],
            189 => [
                'name' => 'Duffel Bag',
                'description' => 'This spacious duffel bag is perfect for weekend trips, sports, or the gym, offering plenty of storage and durability.'
            ],
            190 => [
                'name' => 'Messenger Bag',
                'description' => 'This stylish messenger bag offers both convenience and style, perfect for carrying your essentials while on the move.'
            ],
            191 => [
                'name' => 'Shoulder Bag',
                'description' => 'This practical shoulder bag offers both comfort and style, ideal for everyday use or traveling.'
            ],
            192 => [
                'name' => 'Briefcase',
                'description' => 'A sleek and professional briefcase, perfect for carrying your documents, laptop, and other essentials for work.'
            ],
            193 => [
                'name' => 'Suitcase',
                'description' => 'Travel in style with this durable and spacious suitcase, designed to provide optimal storage and protection for your belongings.'
            ],
            194 => [
                'name' => 'Travel Bag',
                'description' => 'Perfect for weekend getaways or short trips, this travel bag offers a comfortable and compact solution for all your essentials.'
            ],
            195 => [
                'name' => 'Garment Bag',
                'description' => 'Keep your clothes wrinkle-free and organized with this sturdy garment bag, perfect for travel or storage.'
            ],
            196 => [
                'name' => 'Hiking Backpack',
                'description' => 'This durable hiking backpack is designed to carry all your essentials for outdoor adventures, offering comfort and storage space.'
            ],
            197 => [
                'name' => 'Camping Tent',
                'description' => 'Set up camp easily with this lightweight and durable camping tent, designed to keep you safe and comfortable during your outdoor adventures.'
            ],
            198 => [
                'name' => 'Sleeping Bag',
                'description' => 'Stay warm and cozy in any weather with this high-quality sleeping bag, perfect for camping, hiking, or outdoor activities.'
            ],
            199 => [
                'name' => 'Sleeping Pad',
                'description' => 'This compact sleeping pad provides extra comfort and insulation, making it ideal for camping trips or overnight hikes.'
            ],
            200 => [
                'name' => 'Camping Chair',
                'description' => 'Relax comfortably by the campfire with this portable camping chair, designed for easy transport and maximum comfort.'
            ],
            201 => [
                'name' => 'Camping Stove',
                'description' => 'Cook your meals outdoors with ease using this portable camping stove, designed for efficient and convenient cooking in nature.'
            ],
            202 => [
                'name' => 'Camping Lantern',
                'description' => 'Light up your campsite with this durable and energy-efficient camping lantern, offering bright and reliable illumination.'
            ],
            203 => [
                'name' => 'Portable Cooler',
                'description' => 'Keep your drinks and food cool during outdoor adventures with this durable and spacious portable cooler.'
            ],
            204 => [
                'name' => 'Fishing Rod',
                'description' => 'Catch the big one with this sturdy fishing rod, designed for precision and reliability in all types of fishing environments.'
            ],
            205 => [
                'name' => 'Fishing Tackle Box',
                'description' => 'Organize your bait, lures, and accessories with this durable and spacious fishing tackle box.'
            ],
            206 => [
                'name' => 'Camping Hammock',
                'description' => 'Relax in the great outdoors with this lightweight and comfortable camping hammock, perfect for hiking, camping, or lounging.'
            ],
            207 => [
                'name' => 'Backpacking Stove',
                'description' => 'This compact backpacking stove is perfect for cooking meals on your outdoor adventures, offering quick and efficient heating.'
            ],
            208 => [
                'name' => 'Portable Grill',
                'description' => 'Grill your favorite foods anytime, anywhere with this portable grill, designed for easy transport and use during outdoor activities.'
            ],
            209 => [
                'name' => 'Binoculars',
                'description' => 'Get a closer look at nature with these high-quality binoculars, offering crisp and clear views for birdwatching, hiking, and other outdoor activities.'
            ],
            210 => [
                'name' => 'Hiking Boots',
                'description' => 'Tackle rugged terrain with these durable hiking boots, designed to provide comfort, support, and traction on all types of trails.'
            ],
            211 => [
                'name' => 'Walking Shoes',
                'description' => 'Walk with ease and comfort in these supportive walking shoes, designed for everyday use or long walks in the park.'
            ],
            212 => [
                'name' => 'Trail Shoes',
                'description' => 'Take on the trails with these lightweight trail shoes, offering a great fit and superior grip for outdoor adventures.'
            ],
            213 => [
                'name' => 'Running Shoes',
                'description' => 'Get the most out of your runs with these high-performance running shoes, designed for comfort, speed, and support.'
            ],
            214 => [
                'name' => 'Sneakers',
                'description' => 'These stylish and comfortable sneakers are perfect for everyday wear, providing both support and a casual look.'
            ],
            215 => [
                'name' => 'Boots',
                'description' => 'These sturdy boots are perfect for outdoor activities, providing durability, comfort, and style.'
            ],
            216 => [
                'name' => 'Dress Shoes',
                'description' => 'Look sharp in these elegant dress shoes, perfect for formal occasions, business meetings, or evening outings.'
            ],
            217 => [
                'name' => 'Loafers',
                'description' => 'These stylish loafers offer a comfortable and refined look for both casual and formal occasions.'
            ],
            218 => [
                'name' => 'Sandals',
                'description' => 'Stay cool and comfortable in these stylish sandals, perfect for warm weather, beach trips, or casual outings.'
            ],
            219 => [
                'name' => 'Flip Flops',
                'description' => 'These lightweight flip-flops are perfect for casual wear or the beach, offering easy comfort and convenience.'
            ],
            220 => [
                'name' => 'Slippers',
                'description' => 'Relax at home in these cozy slippers, designed to keep your feet warm and comfortable indoors.'
            ]
        ];

        $product = $products[fake()->numberBetween(0, count($products) - 1)];

        $sell_price = fake()->numberBetween(500, 1000);

        $buy_cost  = fake()->numberBetween(500, $sell_price);

        $dateTime = fake()->dateTimeBetween('2020-01-01', '2025-12-31');

        return [
            'name' => $product['name'],
            'sell_price' => $sell_price,
            'buy_cost' => $buy_cost,
            'stock' => fake()->numberBetween(500, 1000),
            'image' => 'https://picsum.photos/400/800',
            'description' => $product['description'],
            'barcode' => fake()->numberBetween(1000000000000, 9999999999999),
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ];
    }
}
