new DataTable('#example');

const li_items = document.querySelectorAll(".sidebar ul li");
const wrapper = document.querySelector(".wrapper");
const sidebar = document.querySelector('.sidebar');
const boxContent = document.querySelector('.box-content');


// Event listener untuk menutup sidebar ketika item di dalamnya diklik
const sidebarItems = document.querySelectorAll('.sidebar ul li a');
sidebarItems.forEach(item => {
    item.addEventListener('click', () => {
        sidebar.classList.remove('active');
    });
});

// Fungsi untuk mengaktifkan efek sidebar tetap saat digulir
function toggleStickySidebar() {
    const boxContentRect = boxContent.getBoundingClientRect();
    const sidebarHeight = sidebar.clientHeight;
    const windowHeight = window.innerHeight;

    if (boxContentRect.height > sidebarHeight && boxContentRect.top < 0) {
        sidebar.classList.add('sticky');
    } else {
        sidebar.classList.remove('sticky');
    }
}

// Tambahkan event listener saat digulir
window.addEventListener('scroll', toggleStickySidebar);
window.addEventListener('resize', toggleStickySidebar);

// Panggil fungsi saat halaman dimuat
toggleStickySidebar();

li_items.forEach((li_item)=>{
	li_item.addEventListener("mouseenter", ()=>{


			li_item.closest(".wrapper").classList.remove("hover_collapse");

	})
})

li_items.forEach((li_item)=>{
	li_item.addEventListener("mouseleave", ()=>{

			li_item.closest(".wrapper").classList.add("hover_collapse");

	})
})

document.addEventListener("DOMContentLoaded", function() {
    const tbody = document.querySelector('.data-table tbody');

    // Sample complex data
    const data = [
        { id: 1, nama: 'John Doe', nip: '123456', bagian: 'Bagian A', perguruanTinggi: 'Universitas A', jenjang: 'S1', suratPengajuan: 'SP001.pdf' },
        { id: 2, nama: 'Jane Smith', nip: '789012', bagian: 'Bagian B', perguruanTinggi: 'Universitas B', jenjang: 'S2', suratPengajuan: 'SP002.pdf' },
        // More data objects can be added
    ];

    // Render table
    function renderTable() {
        tbody.innerHTML = '';
        data.forEach(item => {
            const row = `
            <tr>
                <td>${item.nama}</td>
                <td>${item.nip}</td>
                <td>${item.bagian}</td>
                <td>${item.perguruanTinggi}</td>
                <td>${item.jenjang}</td>
                <td>${item.suratPengajuan}</td>
                <td>
                    <button class="btn-edit" data-id="${item.id}"><i class="fas fa-edit"></i> Edit</button>
                    <button class="btn-delete" data-id="${item.id}"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
            </tr>
        `;

            tbody.innerHTML += row;
        });
    }

    // Event listeners for Edit and Delete buttons
    tbody.addEventListener('click', function(e) {
        const target = e.target;
        if (target.classList.contains('btn-edit')) {
            const id = parseInt(target.getAttribute('data-id'));
            const selectedItem = data.find(item => item.id === id);
            const newName = prompt('Masukkan nama baru:', selectedItem.nama);
            if (newName) {
                selectedItem.nama = newName;
                renderTable();
            }
        } else if (target.classList.contains('btn-delete')) {
            const id = parseInt(target.getAttribute('data-id'));
            const confirmDelete = confirm('Anda yakin ingin menghapus data ini?');
            if (confirmDelete) {
                const index = data.findIndex(item => item.id === id);
                data.splice(index, 1);
                renderTable();
            }
        }
    });

    // Initial table render
    renderTable();
});



document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");

    searchInput.addEventListener("keyup", function(event) {
        if (event.key === "Enter") {
            event.preventDefault(); // Mencegah pengiriman formulir secara default

            const searchQuery = searchInput.value.trim(); // Mendapatkan nilai pencarian dan menghapus spasi ekstra di awal dan akhir

            if (searchQuery.length > 0) {
                // Menampilkan pesan pencarian atau mengirim data pencarian ke server
                displaySearchResults(searchQuery);
            } else {
                // Jika kotak pencarian kosong, tidak melakukan apa-apa
                // Anda dapat meninggalkan ini kosong atau menambahkan logika tambahan jika diperlukan
                console.log("Kotak pencarian kosong, tidak melakukan pencarian.");
            }
        }
    });

    function displaySearchResults(query) {
        // Di sini Anda dapat melakukan sesuatu dengan nilai pencarian, misalnya mengirimnya ke server
        // atau memperbarui tampilan halaman dengan hasil pencarian.
        console.log("Melakukan pencarian untuk: " + query);
        // Simulasikan aksi pencarian dengan menampilkan pesan
        alert("Hasil pencarian untuk: " + query);
    }
});





// Temukan elemen-elemen yang dibutuhkan
const popup = document.getElementById('popup');
const openButton = document.getElementById('open-popup');
const closeButton = document.getElementById('close-popup');
const submitButton = document.getElementById('submit');
const tanggalInput = document.getElementById('tanggal');
const suratInput = document.getElementById('surat');
const tujuanInput = document.getElementById('tujuan');

// Fungsi untuk membuka popup
function openPopup() {
    popup.style.display = 'flex';
}

// Fungsi untuk menutup popup
function closePopup() {
    popup.style.display = 'none';
    // Membersihkan nilai input setelah popup ditutup
    tanggalInput.value = '';
    suratInput.value = '';
    tujuanInput.value = '';
}

// Mengatur event listener pada tombol-tombol
openButton.addEventListener('click', openPopup);
closeButton.addEventListener('click', closePopup);

// Mengatur event listener untuk tombol submit
submitButton.addEventListener('click', function() {
    const tanggal = tanggalInput.value;
    const surat = suratInput.files[0] ? suratInput.files[0].name : 'Tidak Ada File Dipilih';
    const tujuan = tujuanInput.value;

    // Lakukan sesuatu dengan data yang diambil, misalnya kirim ke server
    console.log('Tanggal Pengajuan:', tanggal);
    console.log('Surat Pengajuan:', surat);
    console.log('Tujuan:', tujuan);

    // Setelah mengambil data, tutup popup
    closePopup();
});