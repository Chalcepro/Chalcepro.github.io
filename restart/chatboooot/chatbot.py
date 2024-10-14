import json
import numpy as np
import re
import random

# Load user inputs and bot responses from JSON
with open(r'C:\Users\user\Documents\GitHub\Chalcepro.github.io\restart\chatboooot\data.json', 'r', encoding='utf-8') as myjson: # Ensure this path is correct
    data = json.load(myjson)
    user_inputs = data['user_inputs']
    bot_responses = data['bot_responses']

# Load the word dictionary from a file
with open(r'C:\Users\user\Documents\GitHub\Chalcepro.github.io\restart\chatboooot\dictionary.txt', 'r', encoding='utf-8') as dict_file:  # Ensure this path is correct
    word_dictionary = set(word.strip().lower() for word in dict_file)

# Function to preprocess user input
def preprocess_input(user_input):
    # Remove punctuation and convert to lowercase
    processed_input = re.sub(r'[^\w\s]', '', user_input.lower())
    
    # Remove duplicated letters
    processed_input = re.sub(r'(.)\1+', r'\1', processed_input)
    
    # Check if each word is in the dictionary, revert to original if not
    words = processed_input.split()
    corrected_words = []
    for word in words:
        if word in word_dictionary:
            corrected_words.append(word)
        else:
            # If the corrected word is not in the dictionary, check original word
            original_word = re.sub(r'(.)\1+', r'\1', word)
            if original_word in word_dictionary:
                corrected_words.append(original_word)
            else:
                corrected_words.append(word)  # If no match, use original word
    
    return ' '.join(corrected_words)

# Function to make predictions
def chatbot_response(user_input):
    processed_input = preprocess_input(user_input)
    for category, sub_categories in user_inputs.items():
        for sub_category in sub_categories:
            if processed_input == sub_category:
                return category
    # If no category is found, learn this new phrase
    learn_new_phrase('unknown', processed_input)
    return None

# Function to add new phrases to user inputs
def learn_new_phrase(category, phrase):
    if category in user_inputs:
        user_inputs[category].append(phrase)
    else:
        user_inputs[category] = [phrase]

# Function to get response based on predicted category and sub-category
def get_response(predicted_category):
    if predicted_category is None:
        return "I'm sorry, I don't understand that. Can you rephrase?"
    return np.random.choice(bot_responses.get(predicted_category, ["I'm sorry, I don't understand that."]))

# Main function
def main():
    print("Chatbot: Hello! Type 'quit' to end the conversation.")

    while True:
        # User input
        user_input = input("User: ").lower()
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
