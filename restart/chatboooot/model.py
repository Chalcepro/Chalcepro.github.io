# chatbot_model.py
import pickle

# Specify the path to the chatbot_model.pkl file
file_path = 'chatbot_model.py'

# Load the content of the chatbot_model.pkl file
with open(file_path, 'rb') as f:
    content = pickle.load(f)

# Print the loaded content to inspect it
print(content)

from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.naive_bayes import MultinomialNB

# Sample training data
data = {
    "greetings": ["hi", "hello", "hey", "howdy", "good morning", "good afternoon", "good evening"],
    "feelings": ["how are you", "what's up", "how's it going", "fine", "great", "not too bad", "i'm good", "thank you"],
    # Add more categories and phrases
}

categories = []
phrases = []

for category, phrase_list in data.items():
    for phrase in phrase_list:
        categories.append(category)
        phrases.append(phrase)

# Vectorize the phrases
vectorizer = TfidfVectorizer()
X = vectorizer.fit_transform(phrases)
y = categories
