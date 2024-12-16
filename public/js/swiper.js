function prevSlide() {
  const container = document.querySelector("#scroll-swiper");
  container.scrollBy({ left: -290, behavior: "smooth" });
}

function nextSlide() {
  const container = document.querySelector("#scroll-swiper");
  container.scrollBy({ left: 290, behavior: "smooth" });
}

document.getElementById('logout-button').addEventListener('click', function () {
    Swal.fire({
        title: "Are you sure you want to Log Out?",
        icon: "warning",
        background: "#1f1f1f",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes!",
        cancelButtonText: "No",
        customClass: {
            title: "text-white",
            icon: "swal2-icon-white", // Add this line to change the text color to white
        },
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("logout-form").submit();
        }
    });
  });