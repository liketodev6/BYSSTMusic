//tab


//https://www.101computing.net/creating-tabs-in-html-css-js/

function selectTab(tabIndex) {
    //Hide All Tabs
    document.getElementById('tab1Content').style.display="none";
    document.getElementById('tab2Content').style.display="none";
    document.getElementById('tab3Content').style.display="none";

    //Show the Selected Tab
    document.getElementById('tab' + tabIndex + 'Content').style.display="block";
}


// modal
const EL_modals = document.querySelectorAll(".modal");

const toggleModal = (ev) => {
    const EL_btn = ev.currentTarget;
    const EL_modal = document.querySelector(EL_btn.dataset.modal);
    // Close all currently open modals:
    EL_modals.forEach(EL => {
        if (EL !== EL_modal) EL.classList.remove("is-active");
    });
    // Toggle open/close targeted one:
    EL_modal.classList.toggle("is-active");
};

const EL_modalBtns = document.querySelectorAll("[data-modal]");
EL_modalBtns.forEach(EL => EL.addEventListener("click", toggleModal));



//add user modal

