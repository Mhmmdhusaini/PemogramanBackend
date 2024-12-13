/**
 * Fungsi untuk menampilkan hasil download
 * @param {string} result - Nama file yang didownload
 */
const showDownload = (result) => {
  console.log("Download selesai");
  console.log(`Hasil Donwload: ${result}`);
};

/**
 * Fungsi untuk download file dengan Promise
 * @returns {Promise<string>} - Nama file yang didownload
 */

const download = () => {
  return new Promise((resolve) => {
    setTimeout(() => {
      const result = "Windows-10.exe";
      resolve(result);
    },3000);
});
};

/**
 * Fungsi utama menggunakan Async/Await
 */
const main = async () => {
  try {
    const result = await download();
    showDownload(result);
  } catch (error) {
    console.error("Terjadi kesalahan saat mendownload:", error);
}
};

main();