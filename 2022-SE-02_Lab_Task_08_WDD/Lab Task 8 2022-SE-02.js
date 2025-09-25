 const blogData = [
      {
        "id": 1,
        "title": "HTML Best Practices",
        "content": "Understand semantic HTML and why it's important for accessibility and SEO. Semantic tags help give clear structure to web pages, making them easier for screen readers and search engines to interpret.",
        "image": "images/img1.png",
        "author": "Hashaam Ahmed"
      },
      {
        "id": 2,
        "title": "CSS Tricks for Beginners",
        "content": "Explore essential CSS tips and tricks to make your website look professional. From mastering layouts and typography to using colors, transitions, and responsive design, CSS helps bring style to modern web pages.",
        "image": "images/img2.png",
        "author": "Dawood Ibrahim"
      },
      {
       "id": 3,
        "title": "Introduction to JavaScript",
        "content": "Learn the basics of JavaScript, the most popular programming language for web development. From variables and functions to events and DOM manipulation, JavaScript gives life to web pages and makes them interactive.",
        "image": "images/img3.png",
        "author": "Ozair Baloch"
      }
    ];
     
const blogContainer = document.getElementById("blog");

for (let i = 0; i < blogData.length; i++) {
const post = blogData[i];
  
const card = document.createElement("div");
card.className = "card";
card.innerHTML = `
 <img src="${post.image}" alt="${post.title}">
 <h3>${post.title}</h3>
 <p>${post.content}</p>
 <small>By ${post.author}</small>
`;

blogContainer.appendChild(card);
}