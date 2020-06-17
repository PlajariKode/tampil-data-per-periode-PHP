--
-- Create Database: `test`
--

CREATE DATABASE IF NOT EXISTS test;
USE test;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL
);

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`nama_produk`, `harga`, `qty`, `tgl_transaksi`) VALUES
('Sabun', 2000, 3, '2020-05-17'),
('Shampo', 500, 4, '2020-05-17'),
('Mie Goyeng 1 Box', 50000, 1, '2020-05-18'),
('Mie Rebus', 2500, 4, '2020-06-10'),
('Boom', 5000, 1, '2020-06-15');
COMMIT;