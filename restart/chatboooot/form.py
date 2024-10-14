#random generator
import random

# Define categories and sub-categories
categories = ["greetings", "feelings", "jokes"]  # Add more categories as needed
sub_categories = {
    "greetings": ["hello", "hi", "hey", "howdy"],
    "feelings": ["how are you", "what's up", "how's it going"],
    "jokes": ["tell me a joke", "say something funny"]
    # Add more sub-categories as needed
}

# Generate user inputs
user_inputs = []
for category in categories:
    for sub_category in sub_categories[category]:
        # Generate variations of sub-categories
        for _ in range(200):  # Generate 200 variations for each sub-category
            variation = sub_category + str(random.randint(1, 1000))  # Add random number for variation
            user_inputs.append(variation)

# Generate bot responses
bot_responses = {}
for category in categories:
    bot_responses[category] = []
    for sub_category in sub_categories[category]:
        # Generate variations of responses
        for _ in range(200):  # Generate 200 variations for each sub-category
            bot_responses[category].append(f"Bot response for {sub_category} variation")

# Print user inputs and bot responses
print("User Inputs:")
for user_input in user_inputs:
    print(user_input)

print("\nBot Responses:")
for category, responses in bot_responses.items():
    print(f"{category.capitalize()} Responses:")
    for response in responses:
        print(response)


# the original
import pickle
import numpy as np
import re
import random

# Define user inputs with categories and sub-categories
user_inputs = {
    "greetings": ["hello", "hi", "hey", "howdy", "Yo"],
    "feelings": ["how are you", "what's up", "how's it going"],
    "jokes": ["tell me a joke", "say something funny"],
    # Add more categories and sub-categories as needed
}

# Define bot responses with categories and sub-categories
bot_responses = {
    "greetings": ["Hello!", "Hi there!", "Hey!", "Howdy!", "yellow"],
    "feelings": ["I'm doing well, thanks for asking!", "I'm good, how about you?", "Doing great!"],
    "jokes": [
        "Why did the scarecrow win an award? Because he was outstanding in his field!",
        "What do you call fake spaghetti? An impasta!",
        "Why don't skeletons fight each other? They don't have the guts!"
    ],
    # Add more categories and sub-categories as needed
}

# Function to preprocess user input
def preprocess_input(user_input):
    processed_input = re.sub(r'[^\w\s]', '', user_input.lower())
    return processed_input

# Function to make predictions
def chatbot_response(user_input):
    processed_input = preprocess_input(user_input)
    for category, sub_categories in user_inputs.items():
        for sub_category in sub_categories:
            if processed_input == sub_category:
                return category
    return None

# Function to get response based on predicted category and sub-category
def get_response(predicted_category):
    return np.random.choice(bot_responses.get(predicted_category, ["I'm sorry, I don't understand that."]))

# Main function
def main():
    print("Chatbot: Hello! Type 'quit' to end the conversation.")

    while True:
        # User input
        user_input = input("User: ")
        if user_input.lower() == "quit":
            print("Chatbot: Goodbye!")
            break  # Exit the loop if user types "quit"
        
        # Get chatbot response
        predicted_category = chatbot_response(user_input)
        
        # Display response
        response = get_response(predicted_category)
        print("Chatbot:", response)

if __name__ == "__main__":
    main()


#with dictionary
import json
import numpy as np
import re
import random

# Load user inputs and bot responses from JSON
with open('data.json') as json_file:
    data = json.load(json_file)
    user_inputs = data['user_inputs']
    bot_responses = data['bot_responses']

# Load dictionary of common words (assuming you have a 'dictionary.txt' file)
with open('dictionary.txt') as dict_file:
    word_dictionary = set(word.strip().lower() for word in dict_file)

# Function to normalize repeated characters
def normalize_repeated_chars(word):
    return re.sub(r'(.)\1+', r'\1', word)

# Function to preprocess user input
def preprocess_input(user_input):
    # Normalize repeated characters
    normalized_input = ' '.join(normalize_repeated_chars(word) for word in user_input.split())
    # Remove punctuation and convert to lowercase
    processed_input = re.sub(r'[^\w\s]', '', normalized_input.lower())
    return processed_input

# Function to make predictions
def chatbot_response(user_input):
    processed_input = preprocess_input(user_input)
    for category, sub_categories in user_inputs.items():
        for sub_category in sub_categories:
            if processed_input == sub_category:
                return category
    return None

# Function to get response based on predicted category and sub-category
def get_response(predicted_category):
    return np.random.choice(bot_responses.get(predicted_category, ["I'm sorry, I don't understand that."]))

# Main function
def main():
    print("Chatbot: Hello! Type 'quit' to end the conversation.")

    while True:
        # User input
        user_input = input("User: ").lower()
        if user_input == "quit":
            print("Chatbot: Goodbye!")
            break  # Exit the loop if user types "quit"
        
        # Get chatbot response
        predicted_category = chatbot_response(user_input)
        
        # Display response
        response = get_response(predicted_category)
        print("Chatbot:", response)

if __name__ == "__main__":
    main()
