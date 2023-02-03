<br />
<div align="center">
  <h1 align="center">E Katalog</h1>
  
  <p align="center">
    Ahmad Ali Satia - 20552011200 - TIF K 20 CID
    <br></br>
    <a href="https://alisatia.000webhostapp.com/e_katalog"><strong>Buka Website E-Katalog</strong></a>
  </p>
</div>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#project-e-katalog">Project E- Katalog</a>
    </li>
    <li>
      <a href="#backend">Backend</a>
      <ul>
        <li><a href="#koneksi-database">Koneksi Database</a></li>
        <li><a href="#crud">CRUD</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

<!-- Project E-Katalog -->
## Project E-Katalog

Berkembangnya teknologi informasi yang demikian pesat di millennial sekarang ini sudah mencapai taraf sebagai kebutuhan, sehingg semua lapisan masyarakat tergerak untuk maju dan menggunakannya. Komputer dan smartphone merupakan contoh dari teknologi informasi yang digunakan hampir disetiap kegiatan masyarakat. Bermunculannya gadget-gadget yang canggih dianggap sangat membantu manusia dalam memecahkan berbagai masalah yang di hadapi.

Perkembangan teknologi informasi ini senantiasa diterapkan dalam beberapa bisnis, salah satunya jenis bisnis apparel. Berbagai jenis software yang dapat di akses dari smartphone seperti e commerce yang cukup berperan dalam penjualan. Tidak hanya dalam penjualan, dengan adanya teknologi informasi ini juga membantu dalam membuat iklan produk sebagai sarana pemasaran, melihat dan menganalisis pasar saat ini, dan membuat katalog digital.

Dengan adanya e-katalog atau katalog digital dapat membantu bisnis apparel agar dapat memampang semua produk. Dengan di pampangnya semua produk maka akan membantu pelanggan dengan cepat menembukan produk yang dicari. Dengan begitu semua sisi antara penjual dan pelanggan dapat termudahkan.  
Here's why: * Your time should be focused on creating something amazing. A project that solves a problem and helps others * You shouldn't be doing the same tasks over and over like creating a README from scratch * You should implement DRY principles to the rest of your life :smile:

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- backend -->
## Backend

Script menggunakan framework bootstrap, untuk ke backend menggunakan php dan database menggunakan mysql

### Koneksi Database

script php untuk mengkoneksikan ke database. 
* php ke mysql
  ```sh
  $sname= "localhost";
  $unmae= "root";
  $password = "";
  $db_name = "website";
  $conn = mysqli_connect($sname, $unmae, $password, $db_name);
  ```

### CRUD

Create Read Update dan Delete menggunakan script standar dari php

1. Create

    Create menggunakan query database yaitu INSERT INTO yang kemudian disesuaikan dengan field-field yang akan ditambahkan.
* create akun
   ```sh
    <?php
    include_once("db_conn.php");
    if (isset($_POST['user']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['re_password'])) {
      $uname = validate($_POST['user']);
	  $pass = validate($_POST['password']);
	  $re_pass = validate($_POST['re_password']);
	  $email = validate($_POST['email']);
	  $user_data = 'user='. $uname. '&email='. $email;
      $sql2 = "INSERT INTO tb_user ( email, username, password) VALUES('$email', '$uname', '$pass')";
      $result2 = mysqli_query($conn, $sql2);
    }
   ?>
   ```
 * create produk
   ```sh
    <?php
    include_once("db_conn.php");
    if(isset($_POST['Submit'])) {	
      $nama = mysqli_real_escape_string($conn, $_POST['nama']);
      $harga = mysqli_real_escape_string($conn, $_POST['harga']);
      $gambar = mysqli_real_escape_string($conn, $_POST['gambar']);
      $result = mysqli_query($conn, "INSERT INTO tb_product (nama,gambar,harga) VALUES ('$nama','$gambar','$harga')");
      header("Location: crud.php");
    }
    ?>
   ```
2. Read
    
    Read menggunakan query database SELECT * untuk menggambil semua data yang ada di database.
 * create produk
   ```sh
    <?php
    include_once("db_conn.php");
    $result = mysqli_query($conn, "SELECT * FROM tb_product ORDER BY id DESC");
    while($res = mysqli_fetch_array($result)) { 		
    echo "<tr>";
    echo "<td>".$res['id']."</td>";
    echo "<td>".$res['nama']."</td>";
    echo "<td>".$res['harga']."</td>";
    echo "<td>".$res['gambar']."</td>";	
    echo "<td><a href=\"crud_edit.php?id=$res[id]\">Edit</a> |
          <a href=\"crud_delete.php?id=$res[id]\" onClick=\"return confirm('hapus produk?')\">Delete</a></td>";		
    }
    ?>
   ```
3. Update

    Read menggunakan query database SELECT * untuk menggambil semua data yang ada di database
   ```sh
   git clone https://github.com/your_username_/Project-Name.git
   ```
3. Install NPM packages
   ```sh
   npm install
   ```
4. Enter your API in `config.js`
   ```js
   const API_KEY = 'ENTER YOUR API';
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

_For more examples, please refer to the [Documentation](https://example.com)_

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [x] Add Changelog
- [x] Add back to top links
- [ ] Add Additional Templates w/ Examples
- [ ] Add "components" document to easily copy & paste sections of the readme
- [ ] Multi-language Support
    - [ ] Chinese
    - [ ] Spanish

See the [open issues](https://github.com/othneildrew/Best-README-Template/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Your Name - [@your_twitter](https://twitter.com/your_username) - email@example.com

Project Link: [https://github.com/your_username/repo_name](https://github.com/your_username/repo_name)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

Use this space to list resources you find helpful and would like to give credit to. I've included a few of my favorites to kick things off!

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Malven's Flexbox Cheatsheet](https://flexbox.malven.co/)
* [Malven's Grid Cheatsheet](https://grid.malven.co/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)
* [React Icons](https://react-icons.github.io/react-icons/search)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
