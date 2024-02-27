const loadData = async () => {
    try {
        const response = await fetch('https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php');
        const data = await response.json();
        const latestBooksElement = document.getElementById('latest-books');

        data.forEach(book => {
            const bookElement = document.createElement('div');
            bookElement.classList.add('book');
            bookElement.innerHTML = `
            <h2>${book.title}</h2>
            <p>Author: ${book.authors[0].name}</p>
            <p>Published: ${book.publication_date}</p>
            <p>Price: ${book.price}</p>
        `;
            latestBooksElement.appendChild(bookElement);
        });

    } catch (error) {
        console.error('Error fetching data:', error);
    }
};
document.addEventListener('DOMContentLoaded', loadData);