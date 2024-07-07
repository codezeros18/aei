<section>
    <header class="header px-2 md:px-48">
        <nav class="nav container">
            <div class="nav__data font-montserrat">
                <a href="" class="nav__logo">
                    <img src="img/logos121.png" alt="" class="h-[60px] w-[60px] md:h-[65px] md:w-[65px] lg:h-[70px] lg:w-[70px]">
                </a>
                <div class="nav__toggle" id="nav-toggle">
                    <svg class="nav__toggle-menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="nav__toggle-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </div>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list font-montserrat text-[15px] font-normal">
                    <li>
                        <a href="index.php" class="nav__link tracking-normal">Home</a>
                    </li>
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button tracking-normal" id="productsDropdown">
                            Products & Services
                        </div>
                        <div class="dropdown__container">
                            <div class="dropdown__content text-[13px] tracking-normal font-normal">
                                <div class="dropdown__group">
                                    <span class="dropdown__title hover:text-orangenav text-[15px]"><a href="bpp">Boiler & Power Plant</a></span>
                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="fluidized" class="dropdown__link">Fluidized Bed Boiler</a>
                                        </li>
                                        <li>
                                            <a href="cfbc" class="dropdown__link">CFBC</a>
                                        </li>
                                        <li>
                                            <a href="cgb" class="dropdown__link">Chain Grate Boiler</a>
                                        </li>
                                        <li>
                                            <a href="rgb" class="dropdown__link">Reciprocating Grate Boiler</a>
                                        </li>
                                        <li>
                                            <a href="gob" class="dropdown__link">Gas & Oil Boiler</a>
                                        </li>
                                        <li>
                                            <a href="tob" class="dropdown__link">Thermal Oil Boiler</a>
                                        </li>
                                        <li>
                                            <a href="pp" class="dropdown__link">Power Plant</a>
                                        </li>
                                        <li>
                                            <a href="bp" class="dropdown__link">Boiler Part</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown__group">
                                    <span class="dropdown__title hover:text-orangenav text-[15px]"><a href="enco">Engineering & Construction</a></span>
                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="eng" class="dropdown__link">Engineering</a>
                                        </li>
                                        <li>
                                            <a href="cons" class="dropdown__link">Construction</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown__group">
                                    <span class="dropdown__title hover:text-orangenav text-[15px]"><a href="auot">Automation & IOT</a></span>
                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="aut" class="dropdown__link">Automation</a>
                                        </li>
                                        <li>
                                            <a href="iot" class="dropdown__link">IOT</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown__group">
                                    <span class="dropdown__title hover:text-orangenav text-[15px]"><a href="masp">Maintenance & Spareparts</a></span>
                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="mase" class="dropdown__link">Maintenance & Services</a>
                                        </li>
                                        <li>
                                            <a href="spar" class="dropdown__link">Spareparts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="about" class="nav__link tracking-normal">About Us</a>
                    </li>
                    <li>
                        <a href="contact" class="nav__link tracking-normal">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</section>
<style>
    .header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    box-shadow: 0 2px 8px hsla(220,68%,12%,.1);
    background-color: #ffffff;
    z-index: 2;
}


.barrier{
    width: 100%;
    color: #ffffff;
    margin: 35px 0 25px 0;
}

.nav{
    height: 5rem;
}

.nav__data{
    height: 100%;
    display: flex;
    justify-content:space-between;
    align-items: center;
}

.nav__logo{
    display: inline-flex;
    align-items: center;
    column-gap: .25rem;
    font-weight: 700;
    transition: color .3s;
    font-size: 1.9rem;
    color: #EE780A;
}

.nav__logo i{
    font-size: 2rem;
}

.nav__toggle{
    position: relative;
    width: 32px;
    height: 32px;
    font-weight: 500;
}

.nav__toggle-menu,
.nav__toggle-close{
    font-size: 24px;
    position: absolute;
    display: grid;
    place-items: center;
    inset: 0;
    cursor: pointer;
    font-weight: 700;
}

.nav__toggle-close{
    opacity: 0;
}

.section-p1{
    padding: 40px 80px;
}

.section-m1{
    margin: 40px 0;
}

@media screen and (min-width:400px) and (max-width: 1118px) {
    .nav__menu{
        background-color: #ffffff;
        position: absolute;
        left: 0;
        top: 4.5rem;
        width: 100%;
        height: calc(100vh - 3.5rem);
        overflow: auto;
        padding-block: 1.5rem 4rem;
        pointer-events: none;
        opacity: 0;
        transition: top .4s, opacity .3s;
    }

    .nav__logo{
        font-size: 1.5rem;
    }

    .nav__menu::-webkit-scrollbar{
        width: .5rem;
    }

    .nav__menu::-webkit-scrollbar-thumb{
        background-color: hsl(220, 12%, 70%);
    }
}

@media screen and (max-width:400px) {
    .nav__menu{
        background-color: #ffffff;
        position: absolute;
        left: 0;
        top: 4.5rem;
        width: 100%;
        height: calc(100vh - 3.5rem);
        overflow: auto;
        padding-block: 1.5rem 4rem;
        pointer-events: none;
        opacity: 0;
        transition: top .4s, opacity .3s;
    }

    .nav__logo{
        font-size: 1.2rem;
        padding-right: 20px;
    }

    .nav__menu::-webkit-scrollbar{
        width: .5rem;
    }

    .nav__menu::-webkit-scrollbar-thumb{
        background-color: hsl(220, 12%, 70%);
    }
}

.nav__link{
    padding: 1.25rem 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition:background-color .3s ;
}

.nav__link:hover{
    color: #EE780A;
}

.show-menu{
    opacity: 1;
    top:4.9rem;
    pointer-events: initial;
}

.show-icon .nav__toggle-menu{
    opacity: 0;
    transform: rotate(90deg);
}

.show-icon .nav__toggle-close{
    opacity: 1;
    transform: rotate(90deg);
}

.dropdown__button{
    cursor: pointer;
}

.dropdown__arrow{
    font-size: 1rem;
    font-weight: initial;
    transition: transform .4s;
}

.dropdown__content,
.dropdown__group,
.dropdown__list{
    display: grid;
}

.dropdown__container{
    background-color: #FAF9F6;
    height: 0;
    overflow: hidden;
    transition: height .4s;
}

.dropdown__content{
    row-gap:  1.75rem;
}

.dropdown__group{
    padding-left: 2.5rem;
    row-gap: .5rem;
}

.dropdown__group:first-child{
    margin-top: 1.25rem;
}

.dropdown__group:last-child{
    margin-bottom: 1.25rem;
}

.dropdown__icon{
    font-size: 1.25rem;
    color: #EE780A;
}

.dropdown__list{
    row-gap: .25rem;
}

.dropdown__link:hover{
    color:#EE780A;
}

.show-dropdown .dropdown__arrow{
    transform: rotate(10px);
}
@media screen and (max-width: 300px){
    .dropdown__group{
        padding-left: 1.5rem;
    }
}

@media screen and (min-width: 1118px){
    .nav{
        height: calc(4.5rem + 2rem);
        display: flex;
        justify-content: space-between;
    }

    .nav__toggle{
        display: none;
    }

    .nav__list{
        display: flex;
        column-gap: 3rem;
        height: 100%;
    }

    .nav li{
        display: flex;
    }

    .nav__link{
        padding: 0;
    }

    .nav__link:hover{
        background-color: initial;
    }

    .dropdown__button{
        column-gap: .25rem;
        pointer-events: none;
    }

    .dropdown__container{
        height: max-content;
        position: absolute;
        left: 0;
        right: 0;
        top: 6.5rem;
        background-color: #ffffff;
        box-shadow: 0 6px 8px hsla(220, 68%, 12%, .05);
        pointer-events: none;
        opacity: 0;
        transition: top .4s, opacity .3s;
    }

    .dropdown__content{
        grid-template-columns: repeat(4,max-content);
        column-gap: 6rem;
        max-width: 1120px;
        margin-inline: auto;
    }

    .dropdown__group{
        padding: 4rem 0;
        align-content: baseline;
        row-gap: 1.25rem;
    }

    .dropdown__group:first-child,
    .dropdown__group:last-child{
        margin: 0;
    }

    .dropdown__list{
        row-gap: .75rem;
    }

    .dropdown__icon{
        width: 60px;
        height: 60px;
        display: grid;
        place-items: center;
        margin-bottom: 1rem;
    }

    .dropdown__link:hover{
        color: #EE780A;
    }

    .dropdown__item{
        cursor: pointer;
    }

    .dropdown__item:hover .dropdown__arrow{
        transform: rotate(180deg);
    }

    .dropdown__item:hover > .dropdown__container{
        top: 6.5rem;
        opacity: 1;
        pointer-events: initial;
        cursor: initial;
    }
    .header.scrolled{
        background-color: rgba(255, 255, 255, 0.9); /* White color with 50% opacity */
    }
    .header.scrolled .nav {
        height: 60px;
    }
    .header.scrolled .nav__logo img{
        width: 50px;
        height: 50px
    }

    .header.scrolled .dropdown__container {
    /* Adjust the top position as needed */
    top: 3.5rem; /* For example */
    /* Add any other styles you want to apply */
}
}


</style>

<script>
window.addEventListener('scroll', function() {
        const header = document.querySelector('.header');
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

//NAVBAR
const showMenu = (toggleId,navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    toggle.addEventListener('click',()=>{
        nav.classList.toggle('show-menu')

        toggle.classList.toggle('show-icon')
    })
}

showMenu('nav-toggle','nav-menu')


//Show Dropdown Menu
const dropdownItems = document.querySelectorAll('.dropdown__item')

//Select each dropdown item
dropdownItems.forEach((item) => {
    const dropdownButton = item.querySelector('.dropdown__button')

    //Select each button click
    dropdownButton.addEventListener('click',()=>{
        //Select the current show-dropdown class
        const showDropdown = document.querySelector('.show-dropdown')
        //Call the toggleItem fuction
        toggleItem(item)
        //Remove the show-dropdownclass from other items
        if(showDropdown && showDropdown!= item){
            toggleItem(showDropdown)
        }
    })
})

//Create function to display the dropdown
const toggleItem = (item) =>{
    //Select each dropdown content
    const dropdownContainer = item.querySelector('.dropdown__container')

    //If the same item contains the show-dropdown class, remove
    if(item.classList.contains('show-dropdown')){
        dropdownContainer.removeAttribute('style')
        item.classList.remove('show-dropdown')
    }else{
        //Add the maximum height to dropdown content and add the show-dropdown class
        dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
        item.classList.add('show-dropdown')
    }
}

// //Delete Dropdown Styles
// const mediaQuery = matchMedia('(min-width:1118px)'),
//         dropdown__container = document.querySelectorAll('.dropdown__container')

// //Function to remove dropdown styles in mobile mode when browser resizes
// const removeStyle = () =>{
//     //Validate if the media query reaches 1118px
//     if(mediaQuery.matches){
//         dropdownContainer.forEach((e) =>{
//             e.removeAttribute('style')
//         })

//         dropdownItems.forEach((e)=>{
//             e.classList.remove('show-dropdown')
//         })
//     }

// }

// addEventListener('resize',removeStyle)

// Function to toggle dropdown visibility

function toggleDropdown(buttonId) {
    const button = document.getElementById(buttonId);
    const container = button.nextElementSibling;
    const isVisible = container.style.opacity === "1";

    // Close all dropdowns before opening the clicked one
    closeAllDropdowns();

    // Toggle the visibility of the clicked dropdown container
    container.style.opacity = isVisible ? "0" : "1";
    container.style.pointerEvents = isVisible ? "none" : "auto";
}

// Function to close all open dropdowns
function closeAllDropdowns() {
    const dropdownContainers = document.querySelectorAll(".dropdown__container");
    dropdownContainers.forEach((container) => {
        container.style.opacity = "0";
        container.style.pointerEvents = "none";
    });
}

// Function to handle the click event for larger screens
function handleDropdownClick(event) {
    if (window.innerWidth >= 1118) {
        toggleDropdown(event.target.id);
    }
}

// Add click event listeners to the dropdown buttons
document.getElementById("productsDropdown").addEventListener("click", handleDropdownClick);
document.getElementById("languageDropdown").addEventListener("click", handleDropdownClick);



// sending email

const slider = document.querySelector('.items');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 3; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;
  console.log(walk);
});

</script>
