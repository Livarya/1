
import 'package:flutter/material.dart';
import 'package:flutter_application_2/halaman_produk.dart';


void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return const MaterialApp(
      title: 'aplikasi produk',
      home: HalamanProduk(),
    );
  }
}