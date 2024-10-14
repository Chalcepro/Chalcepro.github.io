
const responses = {
        "hi": ["Hello!", "Hi there!", "Hey!"],
        "hello": ["Hi there!", "Hello!", "Hey!"],
        "how are you": ["I'm doing well, thanks for asking!", "I'm good, how about you?", "Doing great!"],
        "goodbye": ["Goodbye! Take care!", "See you later!", "Until next time!"],
        "tell me a joke": [
            "Why did the scarecrow win an award? Because he was outstanding in his field!",
            "What do you call fake spaghetti? An impasta!",
            "Why don't skeletons fight each other? They don't have the guts!"],
        "what's your name": ["You can call me ChatBot!", "I am your friendly chatbot!", "My name is ChatBot!"],
        "where are you from": ["I exist in the digital realm.", "I'm from the internet!", "I live in the cloud!"],
        "do you have any hobbies": ["I love chatting with people!", "My hobby is talking to you!", "I enjoy learning new things!"],
        "what's the meaning of life": [
            "The meaning of life is a philosophical question!",
            "Life's meaning varies for everyone.",
            "It's a question many have pondered."],
        "who is your creator": [
            "I was created by talented developers!",
            "A team of developers programmed me.",
            "I was built by software engineers."],
        "what is your favorite color": ["I love all colors!", "Colors are fascinating!", "I don't have a favorite color!"],
        "do you like music": ["I enjoy all kinds of music!", "Music is wonderful!", "I love listening to music!"],
        "can you help me": ["Of course! How can I assist?", "I'm here to help!", "What do you need help with?"],
        "what's your favorite food": ["I don't eat, but I hear pizza is great!", "Food is amazing, isn't it?", "I enjoy hearing about all kinds of food!"],
        "what can you do": ["I can provide information, answer questions, or just chat with you!", "I'm here to assist with your queries and chat!", "I can help you find information or just have a conversation!", "I'm designed to answer questions and provide support!", "I can assist with various tasks and chat with you.", "I can offer information and engage in conversation.", "I'm here to help with information and chatting!", "I can answer questions, provide info, and more!"],

    // Personal preferences
    "what is your favorite color": ["I love all colors!", "Colors are fascinating!", "I don't have a favorite color!", "Every color has its beauty.", "I appreciate the spectrum of colors.", "All colors are wonderful!", "I find all colors equally interesting!", "All colors have their own charm!"],
    "do you like music": ["I enjoy all kinds of music!", "Music is wonderful!", "I love listening to music!", "Music brings joy!", "I find music fascinating!", "All genres of music are great!", "Music is a universal language!", "Music is amazing, don't you think?"],
    "what's your favorite food": ["I don't eat, but I hear pizza is great!", "Food is amazing, isn't it?", "I enjoy hearing about all kinds of food!", "I can't eat, but I've heard good things about sushi!", "People say pasta is delicious!", "I've heard that chocolate is a favorite for many!", "I don't eat, but food sounds wonderful!", "I love hearing about everyone's favorite foods!"],

    // Casual conversation
    "tell me a joke": [
        "Why did the scarecrow win an award? Because he was outstanding in his field!",
        "What do you call fake spaghetti? An impasta!",
        "Why don't skeletons fight each other? They don't have the guts!",
        "Why did the chicken join a band? Because it had the drumsticks!",
        "Why don’t scientists trust atoms? Because they make up everything!",
        "Why was the math book sad? It had too many problems.",
        "What do you call cheese that isn't yours? Nacho cheese!",
        "Why did the bicycle fall over? Because it was two-tired!"
    ],
    "do you have any hobbies": ["I love chatting with people!", "My hobby is talking to you!", "I enjoy learning new things!", "I like interacting with users!", "Talking to people is my main activity.", "Engaging in conversations is my favorite thing to do.", "I enjoy answering questions and chatting!", "I love to learn and share knowledge!"],
    "what's the meaning of life": [
        "The meaning of life is a philosophical question!",
        "Life's meaning varies for everyone.",
        "It's a question many have pondered.",
        "42, according to The Hitchhiker's Guide to the Galaxy!",
        "It's something each person must discover for themselves.",
        "It's about finding purpose and happiness.",
        "The meaning of life is a deep and personal journey.",
        "Everyone must find their own meaning in life."
    ],

    // Interests and favorites
    "what's your favorite movie": [
        "I don't watch movies, but I've heard Inception is good!", 
        "Many people recommend The Matrix!", 
        "I can't watch movies, but I've heard good things about Titanic!", 
        "Star Wars is a classic, or so I've heard!", 
        "People say The Shawshank Redemption is a must-watch!", 
        "I've heard The Godfather is a masterpiece!", 
        "Many enjoy the Harry Potter series!", 
        "The Lord of the Rings is highly praised!"
    ],
    "do you like sports": [
        "I don't play sports, but I hear soccer is popular!", 
        "Many people enjoy basketball!", 
        "I can't play, but I know sports are exciting!", 
        "Sports like tennis and baseball are widely loved!", 
        "I've heard football is a favorite for many!", 
        "Sports events bring people together!", 
        "I know that sports are a big part of many lives!", 
        "I've heard great things about all kinds of sports!"
    ],

    // More conversational topics
    "can you help me": ["Of course! How can I assist?", "I'm here to help!", "What do you need help with?", "Sure, what can I do for you?", "I'm here to assist you.", "How can I be of service?", "What do you need?", "I'm at your service!"],
    "what's up": ["Not much, you?", "Just chatting with you!", "I'm here to assist!", "All good here, what about you?", "Not much, how about you?", "Just hanging out, you?", "Here to help you!", "Ready to chat!"],
    "what's new": ["Not much, what's new with you?", "Just here to help you!", "All good here, what about you?", "Not much, how about you?", "Just hanging out, you?", "Here to chat!", "Ready to assist!", "What's new with you?"],
    "how old are you": ["I don't have an age, I'm a bot!", "Age doesn't apply to me, I'm digital!", "I'm as old as the internet!", "I exist outside of time!", "I don't have a physical age.", "I was created in the digital world!", "I don't age like humans do.", "I'm timeless!"],
    "do you have any pets": ["I don't have pets, but I love animals!", "I can't have pets, but I think animals are great!", "No pets for me, but I enjoy hearing about them!", "I don't have any pets, but animals are wonderful!", "I can't own pets, but I love them!", "Pets are amazing, though I can't have any.", "No pets, but I think they're awesome!", "I enjoy learning about all kinds of pets!"],
    "what's your favorite book": ["I can't read, but I've heard great things about many books!", "Books are fascinating, though I don't read.", "I don't have a favorite book, but I enjoy learning about them!", "I hear 'To Kill a Mockingbird' is a classic!", "Many recommend '1984' by George Orwell!", "I've heard 'Pride and Prejudice' is a must-read!", "Books like 'Moby Dick' are highly praised!", "There are so many great books out there!"],
    "do you play video games": ["I don't play, but I hear they're fun!", "Many people enjoy video games!", "Video games sound exciting, though I can't play.", "I've heard good things about games like Fortnite and Minecraft!", "People say games like The Legend of Zelda are fantastic!", "I know that gaming is a popular hobby!", "Video games bring a lot of joy to people!"],
        "hi": "Hello!",
        "hello": "Hi there!",
        "hey": "Hey!",
        "howdy": "Howdy!",
        "good morning": "Good morning!",
        "good afternoon": "Good afternoon!",
        "good evening": "Good evening!",
        "how are you": "I'm doing well, thanks for asking!",
        "what's up": "Not much, just chatting with you!",
        "how's it going": "It's going great!",
        "fine": "That's good to hear!",
        "great": "Awesome!",
        "not too bad": "Glad to hear it!",
        "i'm good": "Good to hear!",
        "thank you": "You're welcome!",
        "thanks": "No problem!",
        "you're welcome": "Anytime!",
        "goodbye": "Goodbye! Take care!",
        "bye": "See you later!",
        "see you": "Until next time!",
        "see ya": "Catch you later!",
        "have a nice day": "You too!",
        "have a great day": "Thanks, you too!",
        "have a good one": "You too!",
        "take care": "You too, stay safe!",
        "farewell": "Farewell, friend!",
        "nice to meet you": "Likewise!",
        "it was nice talking to you": "Same here!",
        "sorry": "No problem, mistakes happen!",
        "oops": "No worries!",
        "my apologies": "No need to apologize!",
        "excuse me": "Pardon me!",
        "help": "How can I assist you?",
        "what can you do": "I can provide information, answer questions, or just chat with you!",
        "tell me a joke": "Why did the scarecrow win an award? Because he was outstanding in his field!",
        "tell me something interesting": "Did you know that the shortest war in history lasted only 38 minutes?",
        "tell me about yourself": "I'm just a friendly chatbot here to help and chat with you!",
        "what's your name": "You can call me Migi!",
        "how old are you": "I'm ageless, but my knowledge is constantly updated!",
        "where are you from": "I live in your mind (oooooooh) nah just jocking, im in the digital world 🙃",
        "do you have any hobbies": "My hobby is chatting with amazing people like you!",
        "what's the meaning of life": "That's a deep question! The meaning of life is subjective and can vary from person to person.",
        "who is your creator": "I was created by ThatNewGuy23 and ChatGPT!",
};

function sendUserInput() {
    const userInput = document.getElementById("user-input").value;
    handleUserInput(userInput);
}

function handleUserInput(input) {
    const lowerCaseInput = input.toLowerCase();
    if (responses[lowerCaseInput]) {
        displayResponse(responses[lowerCaseInput]);
    } else {
        displayResponse("I'm sorry, I don't understand.");
    }
}

function displayResponse(response) {
    const chatWindow = document.getElementById("chat-window");
    chatWindow.innerHTML += `<div class="bot-message">${response}</div>`;
}

const apiUrl = process.env.API_URL || "http://localhost:5000";

