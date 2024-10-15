from flask import Flask, render_template, request, jsonify
import json
import numpy as np
import re
import random

app = Flask(__name__)

# Load user inputs and bot responses from JSON
with open(r'C:\Users\user\Documents\GitHub\Chalcepro.github.io\restart\chatboooot\data.json', 'r', encoding='utf-8') as myjson:
    data = json.load(myjson)
    user_inputs = data['user_inputs']
    bot_responses = data['bot_responses']

# Load the word dictionary from a file
with open(r'C:\Users\user\Documents\GitHub\Chalcepro.github.io\restart\chatboooot\dictionary.txt', 'r', encoding='utf-8') as dict_file:
    word_dictionary = set(word.strip().lower() for word in dict_file)

# Function to preprocess user input
def preprocess_input(user_input):
    processed_input = re.sub(r'[^\w\s]', '', user_input.lower())
    processed_input = re.sub(r'(.)\1+', r'\1', processed_input)
    words = processed_input.split()
    corrected_words = []
    for word in words:
        if word in word_dictionary:
            corrected_words.append(word)
        else:
            original_word = re.sub(r'(.)\1+', r'\1', word)
            if original_word in word_dictionary:
                corrected_words.append(original_word)
            else:
                corrected_words.append(word)
    return ' '.join(corrected_words)

# Function to make predictions
def chatbot_response(user_input):
    processed_input = preprocess_input(user_input)
    for category, sub_categories in user_inputs.items():
        for sub_category in sub_categories:
            if processed_input == sub_category:
                return category
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

# Define route for the root URL
@app.route('//127.0.0.1:5502/restart/Lounge_page.html')
def home():
    return render_template('\Users\user\Documents\GitHub\Chalcepro.github.io\restart\Lounge_page.html')  # Serve the HTML page here

# Define route for handling user input and getting chatbot response
@app.route('/get_response', methods=['POST'])
def get_bot_response():
    user_input = request.form['user_input']  # Get user input from the form
    predicted_category = chatbot_response(user_input)  # Get predicted category
    response = get_response(predicted_category)  # Get the response
    return jsonify({'response': response})  # Send back the response in JSON format

if __name__ == '__main__':
    app.run(debug=True)
