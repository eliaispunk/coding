const loveReasons = [
    "You always support and encourage me.",
    "I love the way you look at me when I catch you staring.",
    "I love the way you make me feel safe and protected.",
    "Your warmth is my favorite thing to wake up to.",
    "You make me feel like I'm the only person in the world.",
    "I never need a reason to be happy when I'm with you, I just am.",
    "You make me feel loved in a way no one else has managed to before.",
    "Your presence feels like home to me.",
    "You make time for us.",
    "I love your cute little smiles when you look at me.",
    "I love the way you kiss my forehead out of nowhere.",
    "I love the way you wrap your arm around me when we are out smoking.",
    "I love the way you get flustered by the things I do or say.",
    "I love the sound of your voice.",
    "I love that you're always there for me.",
    "I love the way fall asleep talking on call or next to each other.",
    "I love that you still give me butterflies.",
    "I love how you endlessly tease me or bully me or you know... chase me around the apartment with a piece of cake in hand.",
    "The way you've become sort of a mini-me. Taking my quips and jokes and mannerisms.",
    "I love the way you start talking about the things you love.",
    "I love the way your eyebrows scrunch up when you're really focused on something.",
    "The way your hand perfectly fits into mine.",
    "The way you demand kisses and hugs like a cute whiny puppy...",
    "I love the way my clothes fit on you.",
    "I love that we laugh at the same things.",
    "I love the way you kiss me and how your beard always ends up tickling me a little bit.",
    "I love the way you start to protest whenever I get touchy or kiss your neck.",
    "I love sharing inside jokes with you.",
    "I love how you go along with the plans I make for us.",
    "I love that you genuinely seem to be very much in love with me.",
    "I love that you always seem to like the food I make, no matter how simple it is.",
    "I love your pretty brown eyes.",
    "I love the way you react to my touch.",
    "I love you simply because you are who you are, and being with you makes my life better.",
    "You take an interest in my hobbies and passions.",
    "The sense of security and comfort I feel when you're around.",
    "You're my partner in crime, creating adventures and memories together.",
    "You make mundane activities enjoyable like shopping, laundry...",
    "I can rely on you to be there for me in times of need.",
    "Your optimism and positive outlook on life are infectious.",
    "The shared memories and experiences we've created together are priceless, and I can not wait to make more.",
    "You challenge me to be a better person.",
    "I can be my true self around you without judgment.",
    "You make an effort to understand and appreciate my perspective.",
    "The love and respect you show me make me feel valued.",
    "You surprise me with little gestures that brighten your day.",
    "I love the way you try and hold in a gift you've bought me and how excited you get about it. Even though you don't need to get me any gifts.",
    "The way you find joy in simple pleasures.",
    "Your ability to find humor in challenging situations.",
    "Your honesty in expressing your thoughts and feelings.",
    "The way you make me feel comfortable and at ease.",

    
];

document.getElementById('generateButton').addEventListener('click', generateLoveReason);

function generateLoveReason() {
    const loveNote = document.getElementById('loveNote');
    const randomIndex = Math.floor(Math.random() * loveReasons.length);
    loveNote.innerHTML = `<p>${loveReasons[randomIndex]}</p>`;
    animateLoveNote();
}

function animateLoveNote() {
    const loveNote = document.getElementById('loveNote');
    loveNote.style.animation = 'fade-in 1s ease-in-out';
    setTimeout(() => {
        loveNote.style.animation = '';
    }, 1000);
}
