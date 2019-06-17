let template = `<div class="modal">
    <div class="modal__image">
    <img src="img/1.jpg" alt="" class="modal__img">
    </div>
    </div>`;

document
    .querySelector('.images')
    .addEventListener('click', event => {
        event.preventDefault();

        if (event.target.tagName !== 'IMG') {
            return;
        }

        document.body.insertAdjacentHTML('afterBegin', `<div class="modal">
            <div class="modal__image">
            <img src="${event.target.dataset.link}" alt="" class="modal__img">
            </div>
            </div>`);


        document.querySelector('.modal').addEventListener('click', event => {
            if (event.target.tagName !== 'IMG') {
                event.target.remove();
            }
        });
    });
