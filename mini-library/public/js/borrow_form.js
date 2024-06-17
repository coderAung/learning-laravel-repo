
const borrowBtns = document.querySelectorAll('.borrow-btn');
borrowBtns.forEach(b => {
    b.addEventListener('click', e => {
        const book = b.getAttribute('book');
        const author = b.getAttribute('author');
        // const checkBy = 'admin';
        const bookInfo = document.getElementById('bookInfo');
        const borrowDate = document.getElementById('borrowDate');
        const returnDate = document.getElementById('returnDate');

        bookInfo.textContent = book + ' by ' + author;
        borrowDate.textContent = b.getAttribute('borrowDate');
        returnDate.textContent = b.getAttribute('returnDate');

        const modal = new bootstrap.Modal('#borrow-form');
        modal.show();
    })
})