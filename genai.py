import google.generativeai as genai

genai.configure(api_key="AIzaSyDFcXAZvUHCbabalMgWP5y7aTnueVVaVmg")
# Create GenerativeModel instance
model = genai.GenerativeModel('gemini-1.5-flash')
question = input("Enter your question: ")
response = model.generate_content(question)
print(response.text)