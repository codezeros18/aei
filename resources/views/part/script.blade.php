<script>
    let modalOpen = false; // Track if modal is open

    function openModal(imageUrl) {
        const modal = document.createElement('div');
        modal.classList.add('fixed', 'inset-0', 'z-50', 'overflow-auto', 'bg-black', 'bg-opacity-75', 'flex', 'justify-center', 'items-center');
        modal.innerHTML = `
            <div class="modal-content p-0 sm:p-5 md:-20 lg:p-40">
                <img src="${imageUrl}" alt="Gambar" class="max-w-full max-h-full">
                <button class="absolute top-0 right-0 m-4 text-white text-lg" onclick="closeModal()"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
                </button>
            </div>
        `;
        modal.addEventListener('click', () => {
            closeModal();
        });
        document.body.appendChild(modal);

        // Disable body scroll
        document.body.style.overflow = 'hidden';
        modalOpen = true;
    }

    function closeModal() {
        const modal = document.querySelector('.modal-content');
        document.body.removeChild(modal.parentElement);

        // Enable body scroll only if there are no other modals open
        if (!document.querySelector('.modal-content')) {
            document.body.style.overflow = 'auto';
            modalOpen = false;
        }
    }

    // Optional: Close modal when pressing Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modalOpen) {
            closeModal();
        }
    });
</script>
