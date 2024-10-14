from flask import Flask, request, jsonify
import pickle
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.naive_bayes import MultinomialNB

app = Flask(__name__)

# Load the model and vectorizer
with open('chatbot_model.py', 'rb') as f:
    vectorizer, model = pickle.load(f)

@app.route('/chat', methods=['POST'])
def chat():
    # Extract user input from request
    user_input = request.json.get('message')

    # Preprocess user input
    user_input_vec = vectorizer.transform([user_input])

    # Generate response
    prediction = model.predict(user_input_vec)[0]
    response = get_response(prediction)

    # Return response
    return jsonify({"response": response})

def get_response(category):
    responses = {
        "greetings": ["Hello!", "Hi there!", "Hey!", "Hi!", "Greetings!", "Howdy!", "Hey there!"],
        "feelings": ["I'm doing well, thanks for asking!", "I'm good, how about you?", "Doing great!", "I'm fine, thanks!", "I'm good, you?", "Feeling awesome!", "I'm well, how about you?", "I'm doing fantastic, how can I help you?"],
        # Add more categories and responses
    }
    return responses.get(category, ["I'm not sure how to respond to that."])

if __name__ == '__main__':
    app.run(debug=True)
