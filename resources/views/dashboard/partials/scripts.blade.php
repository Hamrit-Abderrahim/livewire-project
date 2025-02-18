<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset ('dash-assets') }}/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset ('dash-assets') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset ('dash-assets') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset ('dash-assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset ('dash-assets') }}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset ('dash-assets') }}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset ('dash-assets') }}/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset ('dash-assets') }}/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('morph.updated', (el, component) => {
            const mySuccessAlert = document.querySelector('.my-success-alert');

            if (mySuccessAlert) {
                setTimeout(() => {
                    mySuccessAlert.style.display = 'none';
                }, 2000);
            }
        });
    });
 
    window.addEventListener('creatToggleModal', event => {
    $('#creatModal').modal('toggle');
})
    window.addEventListener('editToggleModal', event => {
    $('#editModal').modal('toggle');
})
    window.addEventListener('deleteToggleModal', event => {
    $('#deleteModal').modal('toggle');
})
    window.addEventListener('showToggleModal', event => {
    $('#showModal').modal('toggle');
})

</script>