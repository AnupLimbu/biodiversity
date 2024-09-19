import './bootstrap';
import 'flowbite';
import {
    Carousel,initTWE
} from "tw-elements";
import $ from "jquery";

initTWE({ Carousel });

document.addEventListener('DOMContentLoaded', function() {
    // Toggle dropdown visibility
    function toggleDropdown(event) {
        event.stopPropagation(); // Prevent the click from closing the menu immediately
        const dropdownMenu = this.nextElementSibling;

        dropdownMenu.toggle('hidden');

    }

    // Toggle mobile menu visibility
    document.getElementById('hamburgerButton').addEventListener('click', function() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });

    // Close mobile menu
    document.getElementById('closeMobileMenu').addEventListener('click', function() {
        document.getElementById('mobileMenu').classList.add('hidden');
    });

    // Handle mobile dropdowns
    document.querySelectorAll('.dropdown-toggle').forEach(button => {
        button.addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent the click from closing the menu immediately
            const dropdownMenu = this.nextElementSibling;
            if (dropdownMenu) {
                dropdownMenu.classList.toggle('hidden');
            }
        });
    });

    // Close all dropdowns and mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            if (!menu.previousElementSibling.contains(event.target) && !menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
        // Close mobile menu if clicking outside of it
        if (!document.getElementById('hamburgerButton').contains(event.target) &&
            !document.getElementById('mobileMenu').contains(event.target)) {
            document.getElementById('mobileMenu').classList.add('hidden');
        }
    });
});
let contactus_message= document.getElementById('contactus_message');
setTimeout(function () {
    contactus_message.style.display='none'
}, 5000)
function deleteModel(){
    if(confirm("Do you want to delete it?")) {
        this.form.submit();
    } else { return false; }
}
