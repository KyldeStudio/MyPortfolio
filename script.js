const show=document.getElementById('showBtn');
const close=document.getElementById('closeBtn');
const closed=document.getElementById('closeBtnwhite');
const modalContactContainer = document.getElementById('modalContactContainer');

show.addEventListener('click',() => {
    modalContactContainer.classList.add('show');
});

close.addEventListener('click',() => {
    modalContactContainer.classList.remove('show');
});


function closeModal() {
    document.getElementById('modalContactContainer').classList.remove('show');
  }
