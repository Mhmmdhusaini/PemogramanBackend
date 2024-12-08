// TODO 9: Import semua method FruitController

import  { index, store, update, destroy } from "./Controller/FruitController.js";

// NOTES: fungsi main tidak perlu diubah
// jalankan program: nodejs app.js

const main = () => {
    // Menampilkan semua data buah
    index();

    // Menambahkan buah Pisang
    store("Pisang");

    // Mengupdate data buah
    update(0, "Kelapa");

    // Menghapus data buah
    destroy(0);
};

main();