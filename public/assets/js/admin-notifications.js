/**
 * Admin Notifications & Delete Confirmations
 * Using SweetAlert2 with Premium Styling
 */

// Global Toast configuration
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

/**
 * Confirm deletion with SweetAlert2 Premium Styling
 * @param {Object} config - Configuration object
 * @param {string} config.id - The ID of the item to delete
 * @param {string} config.title - The title of the modal (e.g., 'Hapus Lowongan Pekerjaan?')
 * @param {string} config.name - The main item name (e.g., 'Junior Programmer')
 * @param {string} [config.subtext] - Optional sub-context (e.g., 'PT. Teknologi Maju')
 * @param {string} [config.type] - The type of data (optional, used in default message)
 * @param {string} [config.formIdPrefix] - Optional prefix for the form ID
 */
function confirmDelete(config) {
    const {
        id,
        title = 'Hapus Data?',
        name,
        subtext = '',
        type = 'data',
        formIdPrefix = 'delete-form-'
    } = config;

    let htmlContent = `<div style="color: #6c757d; font-size: 0.95rem;">Apakah Anda yakin ingin menghapus ${type} <strong>${name}</strong>`;
    if (subtext) {
        htmlContent += ` dari <strong>${subtext}</strong>`;
    }
    htmlContent += `? Tindakan ini tidak dapat dibatalkan.</div>`;

    Swal.fire({
        title: `<div style="font-weight: 700; font-size: 1.25rem;">${title}</div>`,
        html: htmlContent,
        icon: null,
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
        reverseButtons: true,
        customClass: {
            confirmButton: 'btn btn-danger px-4 py-2 mx-1',
            cancelButton: 'btn btn-outline-secondary px-4 py-2 mx-1',
            popup: 'rounded-4 shadow-sm py-4'
        },
        buttonsStyling: false
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById(formIdPrefix + id);
            if (form) {
                form.submit();
            } else {
                console.error('Delete form not found:', formIdPrefix + id);
            }
        }
    });
}

// Automatically show Toast for Laravel session flashes
document.addEventListener('DOMContentLoaded', function () {
    if (window.sessionSuccess && window.sessionSuccess !== "null" && window.sessionSuccess !== "") {
        Toast.fire({
            icon: 'success',
            title: window.sessionSuccess
        });
    }
    if (window.sessionError && window.sessionError !== "null" && window.sessionError !== "") {
        Toast.fire({
            icon: 'error',
            title: window.sessionError
        });
    }
});
