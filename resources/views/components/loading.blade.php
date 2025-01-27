<div id="loading-overlay" class="fixed inset-0 bg-white z-[999] hidden transition-opacity duration-[2000ms] opacity-0">
    <div class="flex items-center justify-center h-full">
        <div class="w-10 h-10 border-4 border-t-transparent border-[#A3C962] rounded-full animate-spin"></div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const loadingOverlay = document.getElementById("loading-overlay");

        window.addEventListener("beforeunload", function () {
            loadingOverlay.classList.remove("hidden");
            loadingOverlay.classList.add("opacity-100");
        });

        window.addEventListener("load", function () {
            setTimeout(() => {
                loadingOverlay.classList.add("hidden");
                loadingOverlay.classList.remove("opacity-100");
            }, 2000);
        });
    });
</script>
