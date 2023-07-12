import axios from 'axios';

axios.get('/posts')
  .then(response => {
    const blogPosts = response.data;

    const blogPostsContainer = document.getElementById('all-blog-posts');

    blogPosts.forEach(post => {
      const postElement = document.createElement('div');
      postElement.classList.add('blog-post-card', 'bg-white', 'p-4', 'rounded-lg', 'shadow-md', 'w-full', 'md:w-1/2', 'lg:w-1/3', 'xl:w-1/4');

      const readMoreLink = document.createElement('a');
      readMoreLink.href = `/posts/${post.id}`;
      readMoreLink.classList.add('text-blue-500', 'hover:underline');
      readMoreLink.textContent = 'Read More';

      postElement.innerHTML = `
        <h2 class="text-2xl font-bold mb-2">${post.title}</h2>
        <p class="text-gray-700 line-clamp-3">${post.descriptions}</p>
      `;

      postElement.appendChild(readMoreLink);
      blogPostsContainer.appendChild(postElement);
    });
  })
  .catch(error => {
    console.log(error);
  });
