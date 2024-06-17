
const viewDetailBtns = document.querySelectorAll('.view-detail-btn');
viewDetailBtns.forEach(btn => {
    btn.addEventListener('click', e => {
        const id = btn.getAttribute('memberId');
        const name = btn.getAttribute('member');
        const book = btn.getAttribute('book');
        const author = btn.getAttribute('author');
        const checkBy = btn.getAttribute('checkBy');
        const borrowDate = btn.getAttribute('borrowDate');
        const returnDate = btn.getAttribute('returnDate');

        document.querySelector('#member-id').textContent = id;
        document.querySelector('#member-name').textContent = name;
        document.querySelector('#book-info').textContent = book + " by " + author;
        document.querySelector('#check-by').textContent = checkBy;
        document.querySelector('#borrow-date').textContent = borrowDate;
        document.querySelector('#return-date').textContent = returnDate;

        const modal = new bootstrap.Modal('#history-detail');
        modal.show();
    });
})