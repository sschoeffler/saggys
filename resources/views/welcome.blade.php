<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saggy's — Where Legends Never Retire</title>
    <meta name="description" content="The nation's premier nightclub for seasoned exotic entertainers. Gravity is just a suggestion.">
    <meta property="og:title" content="Saggy's — Where Legends Never Retire">
    <meta property="og:description" content="The nation's premier nightclub for seasoned exotic entertainers. Open nightly. Early bird specials at 4:30 PM.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://saggys.us">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@400;500;600&family=Sacramento&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: #0a0a0a; }
        .font-display { font-family: 'Playfair Display', serif; }
        .font-script { font-family: 'Sacramento', cursive; }

        @keyframes neon-flicker {
            0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% { text-shadow: 0 0 10px #ff00de, 0 0 20px #ff00de, 0 0 40px #ff00de, 0 0 80px #ff00de; }
            20%, 24%, 55% { text-shadow: none; }
        }
        .neon-text { animation: neon-flicker 3s infinite alternate; color: #ff00de; }

        @keyframes pole-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .pole-spin { animation: pole-spin 4s linear infinite; }

        @keyframes slow-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .slow-bounce { animation: slow-bounce 3s ease-in-out infinite; }

        .star-bg {
            background-image: radial-gradient(2px 2px at 20px 30px, #ffd700, transparent),
                              radial-gradient(2px 2px at 40px 70px, #ff00de, transparent),
                              radial-gradient(1px 1px at 90px 40px, #fff, transparent),
                              radial-gradient(1px 1px at 130px 80px, #ffd700, transparent),
                              radial-gradient(2px 2px at 160px 30px, #ff00de, transparent);
            background-size: 200px 100px;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        neon: { pink: '#ff00de', gold: '#ffd700', purple: '#8b00ff' },
                        club: { dark: '#0a0a0a', darker: '#050505', card: '#1a1a2e' }
                    }
                }
            }
        }
    </script>
</head>
<body class="text-gray-200 overflow-x-hidden">

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center star-bg" style="background-color: #0a0a0a;">
        <div class="absolute inset-0 bg-gradient-to-b from-purple-900/20 via-transparent to-black/80"></div>

        <!-- Disco ball -->
        <div class="absolute top-8 left-1/2 -translate-x-1/2">
            <div class="w-4 h-16 bg-gray-600 mx-auto"></div>
            <div class="w-20 h-20 rounded-full bg-gradient-to-br from-gray-300 via-gray-500 to-gray-300 pole-spin opacity-60"
                 style="background-image: radial-gradient(circle at 30% 30%, white 1px, transparent 1px), radial-gradient(circle at 60% 60%, white 1px, transparent 1px); background-size: 8px 8px;"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <div id="logo-area" class="mb-6">
                <img src="/saggys-logo.svg" alt="Saggy's Nightclub" class="w-72 md:w-96 mx-auto drop-shadow-[0_0_30px_rgba(255,0,222,0.5)]">
            </div>
            <p class="font-script text-4xl md:text-5xl text-neon-gold mb-4">Where Legends Never Retire</p>
            <p class="text-xl md:text-2xl text-gray-400 mb-8 max-w-2xl mx-auto">
                The nation's premier nightclub for seasoned exotic entertainers.
                <br>Gravity is just a suggestion.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#events" class="px-8 py-4 bg-neon-pink/20 border border-neon-pink text-neon-pink rounded-full text-lg font-semibold hover:bg-neon-pink/30 transition-all">
                    See Tonight's Lineup
                </a>
                <a href="#vip" class="px-8 py-4 bg-neon-gold/20 border border-neon-gold text-neon-gold rounded-full text-lg font-semibold hover:bg-neon-gold/30 transition-all">
                    AARP VIP Section
                </a>
            </div>
            <p class="mt-8 text-sm text-gray-500">Open Nightly &bull; Early Bird Specials Start at 4:30 PM &bull; Free Parking for Mobility Scooters</p>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 slow-bounce">
            <svg class="w-6 h-6 text-neon-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </section>

    <!-- Marquee Ticker -->
    <div class="bg-neon-pink/10 border-y border-neon-pink/30 py-3 overflow-hidden">
        <div class="flex whitespace-nowrap" style="animation: marquee 30s linear infinite;">
            <span class="mx-8 text-neon-pink font-semibold">&#9733; TONIGHT: Big Edna's Farewell Tour (Again) &#9733;</span>
            <span class="mx-8 text-neon-gold font-semibold">&#9733; 2-for-1 Metamucil Mimosas Before 5PM &#9733;</span>
            <span class="mx-8 text-neon-pink font-semibold">&#9733; Wednesday: Cataract Karaoke Night &#9733;</span>
            <span class="mx-8 text-neon-gold font-semibold">&#9733; New! Heated Pole for Arthritis Comfort &#9733;</span>
            <span class="mx-8 text-neon-pink font-semibold">&#9733; Ask About Our Joint Replacement Loyalty Program &#9733;</span>
            <span class="mx-8 text-neon-gold font-semibold">&#9733; Valet Rascal Scooter Parking Available &#9733;</span>
            <span class="mx-8 text-neon-pink font-semibold">&#9733; TONIGHT: Big Edna's Farewell Tour (Again) &#9733;</span>
            <span class="mx-8 text-neon-gold font-semibold">&#9733; 2-for-1 Metamucil Mimosas Before 5PM &#9733;</span>
        </div>
        <style>
            @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
        </style>
    </div>

    <!-- About Section -->
    <section class="py-20 px-4">
        <div class="max-w-5xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-center mb-4 text-neon-gold">About the Club</h2>
            <p class="text-center text-gray-500 mb-12 font-script text-2xl">Est. 1974 &mdash; Still Hanging In There</p>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-club-card rounded-2xl p-8 text-center border border-gray-800 hover:border-neon-pink/50 transition-all">
                    <div class="text-5xl mb-4">💃</div>
                    <h3 class="font-display text-xl font-bold text-neon-pink mb-3">Seasoned Performers</h3>
                    <p class="text-gray-400">Our dancers have a combined 847 years of experience. What they lack in cartilage, they make up for in charisma.</p>
                </div>
                <div class="bg-club-card rounded-2xl p-8 text-center border border-gray-800 hover:border-neon-gold/50 transition-all">
                    <div class="text-5xl mb-4">🍸</div>
                    <h3 class="font-display text-xl font-bold text-neon-gold mb-3">Signature Cocktails</h3>
                    <p class="text-gray-400">Try our famous "The Prolapse" or a refreshing "Hip Replacement on the Rocks." All drinks served with a complimentary fiber supplement.</p>
                </div>
                <div class="bg-club-card rounded-2xl p-8 text-center border border-gray-800 hover:border-neon-pink/50 transition-all">
                    <div class="text-5xl mb-4">♿</div>
                    <h3 class="font-display text-xl font-bold text-neon-pink mb-3">Fully Accessible</h3>
                    <p class="text-gray-400">ADA-compliant stage ramps, extra-wide pole spacing, and a defibrillator in every VIP booth. Safety first, dignity... eventually.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tonight's Performers -->
    <section id="events" class="py-20 px-4 bg-gradient-to-b from-transparent via-purple-900/10 to-transparent">
        <div class="max-w-5xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-center mb-4 text-neon-pink">Tonight's Performers</h2>
            <p class="text-center text-gray-500 mb-12">All shows conclude by 8:30 PM so everyone can take their evening medications</p>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                $performers = [
                    [
                        'name' => 'Glorious Gloria',
                        'aka' => 'The Human Pendulum',
                        'age' => 71,
                        'specialty' => 'Gravity-Defying Floor Work (with a LifeAlert)',
                        'time' => '5:00 PM',
                        'note' => '38 years in the game. Her signature move "The Avalanche" has its own insurance waiver.',
                        'emoji' => '👑',
                    ],
                    [
                        'name' => 'Diamond Dave',
                        'aka' => 'The Silver Fox',
                        'age' => 68,
                        'specialty' => 'Slow-Motion Pole Work',
                        'time' => '5:45 PM',
                        'note' => 'Voted "Most Likely to Throw Out His Back" three years running. Tips accepted in cash or Werther\'s Originals.',
                        'emoji' => '🦊',
                    ],
                    [
                        'name' => 'Big Edna',
                        'aka' => 'The Immovable Object',
                        'age' => 74,
                        'specialty' => 'Seated Exotic Dance',
                        'time' => '6:30 PM',
                        'note' => 'On her 12th farewell tour. "I keep trying to retire but the pole keeps calling." Currently performing from a La-Z-Boy.',
                        'emoji' => '🌟',
                    ],
                    [
                        'name' => 'Roxy Retiree',
                        'aka' => 'Knees of Steel',
                        'age' => 66,
                        'specialty' => 'The Reverse Mortgage',
                        'time' => '7:15 PM',
                        'note' => 'Her legendary move involves descending the pole so slowly the audience isn\'t sure if it\'s choreography or a medical event.',
                        'emoji' => '💎',
                    ],
                ];
                @endphp

                @foreach($performers as $p)
                <div class="bg-club-card rounded-2xl p-6 border border-gray-800 hover:border-neon-pink/50 transition-all group">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">{{ $p['emoji'] }}</div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="font-display text-xl font-bold text-white group-hover:text-neon-pink transition-colors">{{ $p['name'] }}</h3>
                                <span class="text-neon-gold text-sm font-semibold bg-neon-gold/10 px-3 py-1 rounded-full">{{ $p['time'] }}</span>
                            </div>
                            <p class="text-neon-pink text-sm italic mb-1">a.k.a. "{{ $p['aka'] }}" &bull; Age {{ $p['age'] }}</p>
                            <p class="text-neon-gold text-sm mb-2">Specialty: {{ $p['specialty'] }}</p>
                            <p class="text-gray-400 text-sm">{{ $p['note'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <p class="text-center text-gray-600 text-sm mt-8">* Performer lineup subject to change based on hip forecasts and medication schedules</p>
        </div>
    </section>

    <!-- Weekly Events -->
    <section class="py-20 px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-center mb-4 text-neon-gold">Weekly Events</h2>
            <p class="text-center text-gray-500 mb-12 font-script text-2xl">Something saggy every night of the week</p>

            <div class="space-y-4">
                @php
                $events = [
                    ['day' => 'Monday', 'name' => 'Moan-day Recovery', 'desc' => 'Gentle stretching on stage. Foam rollers provided. Tipping optional, Bengay mandatory.'],
                    ['day' => 'Tuesday', 'name' => 'Taco & Tuck Tuesday', 'desc' => '$2 tacos and our cosmetic surgeon on-call for free consultations in the champagne room.'],
                    ['day' => 'Wednesday', 'name' => 'Cataract Karaoke', 'desc' => 'Sing your heart out! Lyrics displayed in 72pt font. Hearing aids amplified through the PA system.'],
                    ['day' => 'Thursday', 'name' => 'Throwback Thursday', 'desc' => 'Watch our performers attempt moves from 1987. Medical staff on standby. Signed waivers required.'],
                    ['day' => 'Friday', 'name' => 'BOGO Bypass Night', 'desc' => 'Bring a friend who\'s had bypass surgery, they get in free! (Proof of scar required at the door.)'],
                    ['day' => 'Saturday', 'name' => 'Sag-urday Spectacular', 'desc' => 'Our biggest night! Full cast, full bar, full dentures. The confetti cannon shoots loose calcium supplements.'],
                    ['day' => 'Sunday', 'name' => 'Brunch & Bunions', 'desc' => 'Bottomless mimosas and a podiatrist in the VIP lounge. Church crowd discount before 2 PM.'],
                ];
                @endphp

                @foreach($events as $i => $event)
                <div class="bg-club-card rounded-xl p-5 border border-gray-800 hover:border-{{ $i % 2 === 0 ? 'neon-pink' : 'neon-gold' }}/50 transition-all flex items-center gap-4">
                    <div class="text-{{ $i % 2 === 0 ? 'neon-pink' : 'neon-gold' }} font-display font-bold text-lg w-28 shrink-0">{{ $event['day'] }}</div>
                    <div>
                        <h3 class="font-bold text-white text-lg">{{ $event['name'] }}</h3>
                        <p class="text-gray-400 text-sm">{{ $event['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Drink Menu -->
    <section class="py-20 px-4 bg-gradient-to-b from-transparent via-pink-900/10 to-transparent">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-center mb-4 text-neon-pink">Drink Menu</h2>
            <p class="text-center text-gray-500 mb-12">All cocktails served with a complimentary pill organizer</p>

            <div class="grid sm:grid-cols-2 gap-6">
                @php
                $drinks = [
                    ['name' => 'The Prolapse', 'price' => '$14', 'desc' => 'Vodka, prune juice, and a splash of regret. Served drooping over the rim.', 'badge' => 'House Favorite'],
                    ['name' => 'Hip Replacement on the Rocks', 'price' => '$12', 'desc' => 'Bourbon, ginger, and ibuprofen extract. Titanium swizzle stick included.'],
                    ['name' => 'The Varicose Vein', 'price' => '$11', 'desc' => 'Blue curaçao and vodka, served in a glass with purple squiggly straws.'],
                    ['name' => 'Saggy Sangria', 'price' => '$10', 'desc' => 'Red wine, fruit, and a generous pour of Metamucil. Keeps things moving on the dance floor.', 'badge' => 'Best Seller'],
                    ['name' => 'The Fallen Angel Shot', 'price' => '$8', 'desc' => 'Fireball and Kahlúa. It goes down easy... just like our performers off the pole.'],
                    ['name' => 'Ensure on the Rocks', 'price' => '$9', 'desc' => 'Chocolate Ensure, Baileys, and a multivitamin garnish. Nutrition meets nightlife.'],
                    ['name' => 'The Hot Flash', 'price' => '$13', 'desc' => 'Jalapeño tequila, lime, and a tiny handheld fan on the rim. You\'ll feel seen.', 'badge' => 'Spicy'],
                    ['name' => 'The Early Bird', 'price' => '$7', 'desc' => 'Any well drink ordered before 5 PM. Because the real party starts at 4:30.'],
                ];
                @endphp

                @foreach($drinks as $drink)
                <div class="bg-club-card rounded-xl p-5 border border-gray-800">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-display font-bold text-white text-lg">{{ $drink['name'] }}</h3>
                        <div class="flex items-center gap-2">
                            @if(isset($drink['badge']))
                            <span class="text-xs bg-neon-pink/20 text-neon-pink px-2 py-0.5 rounded-full">{{ $drink['badge'] }}</span>
                            @endif
                            <span class="text-neon-gold font-bold">{{ $drink['price'] }}</span>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">{{ $drink['desc'] }}</p>
                </div>
                @endforeach
            </div>

            <p class="text-center text-gray-600 text-sm mt-8">* We are legally required to inform you that "The Prolapse" is just a drink name. Management is not responsible for any other prolapses occurring on premises.</p>
        </div>
    </section>

    <!-- VIP Section -->
    <section id="vip" class="py-20 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-display text-4xl md:text-5xl font-bold mb-4 text-neon-gold">The AARP VIP Experience</h2>
            <p class="text-gray-400 mb-12 max-w-2xl mx-auto">Flash your AARP card for our premium experience. Because you've earned it. Probably.</p>

            <div class="grid sm:grid-cols-3 gap-6 mb-12">
                <div class="bg-club-card rounded-2xl p-6 border border-neon-gold/30">
                    <div class="text-4xl mb-3">🛋️</div>
                    <h3 class="font-display font-bold text-neon-gold mb-2">Orthopedic Seating</h3>
                    <p class="text-gray-400 text-sm">Memory foam VIP booths with lumbar support and cup holders for both your drink and your dentures.</p>
                </div>
                <div class="bg-club-card rounded-2xl p-6 border border-neon-gold/30">
                    <div class="text-4xl mb-3">🌡️</div>
                    <h3 class="font-display font-bold text-neon-gold mb-2">Climate Controlled</h3>
                    <p class="text-gray-400 text-sm">Each booth has its own thermostat. Set to whatever temperature ends the argument.</p>
                </div>
                <div class="bg-club-card rounded-2xl p-6 border border-neon-gold/30">
                    <div class="text-4xl mb-3">💊</div>
                    <h3 class="font-display font-bold text-neon-gold mb-2">Pill Concierge</h3>
                    <p class="text-gray-400 text-sm">A dedicated attendant to remind you of your 7 PM medications. Never miss a dose or a dance.</p>
                </div>
            </div>

            <div class="bg-gradient-to-r from-neon-gold/10 via-neon-gold/20 to-neon-gold/10 rounded-2xl p-8 border border-neon-gold/30">
                <h3 class="font-display text-2xl font-bold text-neon-gold mb-2">Lifetime Membership</h3>
                <p class="text-5xl font-display font-black text-white mb-2">$69<span class="text-lg text-gray-500">/year</span></p>
                <p class="text-gray-400 mb-1">At our members' age, "lifetime" is a great deal for us.</p>
                <p class="text-gray-500 text-sm">Includes priority seating, a personal defibrillator, and 10% off at the bar.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 px-4 bg-gradient-to-b from-transparent via-purple-900/10 to-transparent">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-center mb-12 text-neon-pink">What People Are Saying</h2>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                $reviews = [
                    ['text' => 'I came for the early bird special and stayed for Big Edna. I haven\'t felt this alive since my second bypass.', 'name' => 'Harold, 78', 'stars' => 5],
                    ['text' => 'The heated poles are a game changer. My arthritis hasn\'t felt this good since... well, ever. Five stars.', 'name' => 'Glorious Gloria, Performer', 'stars' => 5],
                    ['text' => 'Lost my glasses during Sag-urday Spectacular. Staff found them in the confetti cannon. Wonderful customer service.', 'name' => 'Marge, 72', 'stars' => 4],
                    ['text' => 'My grandson set up my Uber to get here. I don\'t understand this phone but I understand a good time. Will return if alive.', 'name' => 'Eugene, 84', 'stars' => 5],
                ];
                @endphp

                @foreach($reviews as $review)
                <div class="bg-club-card rounded-xl p-6 border border-gray-800">
                    <div class="text-neon-gold mb-3">
                        @for($i = 0; $i < $review['stars']; $i++) ★ @endfor
                        @for($i = $review['stars']; $i < 5; $i++) <span class="text-gray-700">★</span> @endfor
                    </div>
                    <p class="text-gray-300 italic mb-4">"{{ $review['text'] }}"</p>
                    <p class="text-gray-500 text-sm">— {{ $review['name'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Rules of the Club -->
    <section class="py-20 px-4">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-center mb-12 text-neon-gold">House Rules</h2>

            <div class="bg-club-card rounded-2xl p-8 border border-gray-800 space-y-4">
                @php
                $rules = [
                    'No flash photography. Partly for ambiance, mostly because it startles the performers.',
                    'Tip generously. These legends predate minimum wage.',
                    'The champagne room has a panic button AND a nurse call button. Know the difference.',
                    'Please do not oil the poles. They are pre-lubricated with medical-grade joint cream.',
                    'Mobility devices must be parked in designated areas. No Rascal scooter jousting.',
                    'Performers are independent contractors. Management is not responsible for anything that detaches during a show.',
                    'Two-drink minimum. Four-pill maximum.',
                    'No outside Ensure. We sell it here for $9.',
                ];
                @endphp

                @foreach($rules as $index => $rule)
                <div class="flex items-start gap-3">
                    <span class="text-neon-pink font-display font-bold text-lg shrink-0">{{ $index + 1 }}.</span>
                    <p class="text-gray-300">{{ $rule }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-16 px-4 border-t border-gray-800">
        <div class="max-w-4xl mx-auto text-center">
            <div class="font-display text-3xl font-bold neon-text mb-2">SAGGY'S</div>
            <p class="font-script text-xl text-neon-gold mb-6">Where Legends Never Retire</p>

            <div class="text-gray-500 text-sm space-y-2 mb-8">
                <p>Open Nightly 4:30 PM &ndash; 8:30 PM (or whenever the last performer falls asleep)</p>
                <p>Located conveniently next to St. Mary's Hospital and the Golden Acres Retirement Community</p>
                <p>Free validated parking for vehicles with handicap placards</p>
            </div>

            <div class="flex justify-center gap-6 text-gray-600 text-sm mb-6">
                <span>Wheelchair Accessible</span>
                <span>&bull;</span>
                <span>Oxygen Tank Friendly</span>
                <span>&bull;</span>
                <span>Nurse On Duty</span>
            </div>

            <p class="text-gray-700 text-xs">&copy; {{ date('Y') }} Saggy's Entertainment LLC. All rights reserved. No performers were permanently injured in the making of this website.</p>
            <p class="text-gray-800 text-xs mt-2">If you or a loved one has been affected by a visit to Saggy's, please consult your physician.</p>
        </div>
    </footer>

</body>
</html>
