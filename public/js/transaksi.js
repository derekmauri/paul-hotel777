// menampilkan rupiah
const rupiah = (angka) => {
    return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
    }).format(angka);
};

const tabelTransaksi = document.getElementById("table-transaksi");
const tbodyTransaksi = tabelTransaksi.getElementsByTagName("tbody")[0];

// mengambil data booking
function ambilData({ bulan = "", tahun = "" }) {
    // menggunakan fetch
    fetch("/api/transaksi?bulan=" + bulan + "&tahun=" + tahun)
        .then((response) => response.json())
        .then((data) => {
            // menghitung total bayar
            let totalBayar = 0;
            let isiBody = "";
            for (let i = 0; i < data.length; i++) {
                isiBody += `<tr>
                                <td>${i + 1}</td>
                                <td>${data[i].tamu.nm_tamu}</td>
                                <td>${data[i].checkin}</td>
                                <td>${rupiah(data[i].total_bayar)}</td>
                            </tr>`;
                totalBayar += parseInt(data[i].total_bayar);
                console.log({ totalBayar });
            }
            console.log({ totalBayar });
            totalBayar = rupiah(totalBayar);
            isiBody += `<tr>
                            <th colspan="3">Total</th>
                            <th>${totalBayar}</th>
                        </tr>`;
            tbodyTransaksi.innerHTML = isiBody;
        });
}

ambilData({});

// selector bulan dan tahun
const bulan = document.getElementById("bulan");
const tahun = document.getElementById("tahun");
if (bulan) {
    // ketika value dipilih
    bulan.addEventListener("change", () => {
        ambilData({ bulan: bulan.value, tahun: tahun.value });
    });
}
if (tahun) {
    // ketika value dipilih
    tahun.addEventListener("change", () => {
        ambilData({ bulan: bulan.value, tahun: tahun.value });
    });
}
