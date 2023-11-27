<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .movie-card {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 12px;
  position: relative;
}

.movie-card .poster {
  position: relative;
  width: 250px;
  height: 370px;
  background-image: url(./img/poster-image.png);
  background-size: 100% 100%;
}

.movie-card .rating {
  position: relative;
  width: 218px;
  height: 29px;
  top: 16px;
  left: 16px;
}

.movie-card .favorite {
  position: relative;
  width: 30px;
  height: 29px;
  left: 188px;
  background-color: #f3f4f680;
  border-radius: 15px/14.61px;
  backdrop-filter: blur(2px) brightness(100%);
  -webkit-backdrop-filter: blur(2px) brightness(100%);
}

.movie-card .heart {
  position: absolute;
  width: 20px;
  height: 19px;
  top: 5px;
  left: 5px;
}

.movie-card .text-wrapper {
  position: relative;
  width: fit-content;
  font-family: "DM Sans-Bold", Helvetica;
  font-weight: 700;
  color: var(--gray-400);
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.movie-card .stranger-things {
  position: relative;
  width: 250px;
  font-family: "DM Sans-Bold", Helvetica;
  font-weight: 700;
  color: var(--gray-900);
  font-size: 18px;
  letter-spacing: 0;
  line-height: normal;
  align-items: center;
}

.movie-card .div {
  display: flex;
  width: 250px;
  align-items: flex-start;
  justify-content: space-between;
  position: relative;
  flex: 0 0 auto;
}

.movie-card .div-2 {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  position: relative;
  flex: 0 0 auto;
}

.movie-card .img {
  position: relative;
  width: 35px;
  height: 17px;
  object-fit: cover;
}

.movie-card .element {
  position: relative;
  width: fit-content;
  font-family: "DM Sans-Regular", Helvetica;
  font-weight: 400;
  color: var(--gray-900);
  font-size: 12px;
  letter-spacing: 0;
  line-height: 12px;
  white-space: nowrap;
}

.movie-card .pngitem {
  position: relative;
  width: 16px;
  height: 17px;
  object-fit: cover;
}


body {
  margin: 0;
  font-family: "DM Sans-Regular", Helvetica;
  font-weight: 700;
}

.nav-top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #301b52;
  color: white;
  padding: 10px 20px;
}

.logo-components {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo-text {
  font-size: 1.5rem;
  font-weight: bold;
}

.nav-links {
  display: flex;
  gap: 20px;
}

.nav-item a {
  text-decoration: none;
  color: white;
  padding: 8px 12px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.nav-item a:hover {
  background-color: rgba(255, 255, 255, 0.2);
}

.user-buttons {
  display: flex;
  gap: 20px;
}

.primary-btn a {
  text-decoration: none;
  padding: 8px 16px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
  color: #301b52;
  font-weight: bold;
}
.secondary-btn a {
  text-decoration: none;
  padding: 8px 16px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
  color: white;
  font-weight: bold;
}

.primary-btn a {
  background-color: white;
}

.primary-btn a:hover {
  background-color: #eee;
}

.secondary-btn a {
  border: 1px solid white;
}

.secondary-btn a:hover {
  background-color: rgba(255, 255, 255, 0.2);
}

.main-content {
  padding: 20px;
  border-radius: 50px;
  font-family: "DM Sans-Regular", Helvetica;
}

.movie-card {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  /* border: 1px solid #ccc; */
  /* border-radius: 5px; */
  padding: 15px;
  /* box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); */
}

.movie-details {
  align-items: center;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.poster img{
  width: 250px; /* Lebar kartu film */
  height: 370px; /* Tinggi kartu film */
  background-image: url('https://i.pinimg.com/564x/21/da/f1/21daf1af175109cd9d6064fd13514b5e.jpg');
  background-size: contain; /* Menyesuaikan ukuran gambar tanpa melebihi batas kartu film */
  background-position: center;
  background-repeat: no-repeat;
  border-radius: 5px;
}

.description {
  margin-top: 20px;
  font-size: 14px;
  color: #333;
  /* Other styles for the description */
}
.buttons {
  position: absolute;
  bottom: -60px; /* Initial position, hides the button */
  left: 50%;
  transform: translateX(-50%);
  width: 200px;
  height: 56px;
  background-color: #301b52;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
  transition: bottom 0.3s ease; /* Apply transition */
  cursor: pointer;
}

.buttons .label {
  font-family: "DM Sans-Bold", Helvetica;
  font-weight: 700;
  color: white;
  font-size: 18px;
  text-align: center;
  letter-spacing: -0.04px;
  line-height: 24px;
  white-space: nowrap;
}
    </style>
  </head>
  <body>
  <header class="nav-top-bar">
    <div class="logo-components">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 11.3333C4 8.50492 4 7.0907 4.87868 6.21202C5.75736 5.33334 7.17157 5.33334 10 5.33334H22C24.8284 5.33334 26.2426 5.33334 27.1213 6.21202C28 7.0907 28 8.50492 28 11.3333V12.3333C28 12.8856 27.5523 13.3333 27 13.3333H26.6667C25.1939 13.3333 24 14.5273 24 16V16C24 17.4728 25.1939 18.6667 26.6667 18.6667H27C27.5523 18.6667 28 19.1144 28 19.6667V20.6667C28 23.4951 28 24.9093 27.1213 25.788C26.2426 26.6667 24.8284 26.6667 22 26.6667H10C7.17157 26.6667 5.75736 26.6667 4.87868 25.788C4 24.9093 4 23.4951 4 20.6667V19.6667C4 19.1144 4.44772 18.6667 5 18.6667H5.33333C6.80609 18.6667 8 17.4728 8 16V16C8 14.5273 6.80609 13.3333 5.33333 13.3333H5C4.44772 13.3333 4 12.8856 4 12.3333V11.3333Z" stroke="white"/>
        <path d="M15.409 14.2514C15.6332 13.6714 15.7453 13.3815 15.9274 13.3413C15.9752 13.3307 16.0247 13.3307 16.0726 13.3413C16.2547 13.3815 16.3668 13.6714 16.591 14.2514C16.7184 14.5812 16.7822 14.7461 16.9015 14.8583C16.9349 14.8898 16.9712 14.9178 17.0099 14.942C17.1477 15.0282 17.3198 15.0442 17.664 15.0762C18.2466 15.1303 18.5379 15.1574 18.6269 15.3298C18.6453 15.3655 18.6579 15.4041 18.664 15.4441C18.6935 15.6372 18.4793 15.8394 18.051 16.2438L17.932 16.3561C17.7318 16.5452 17.6317 16.6397 17.5738 16.7577C17.539 16.8285 17.5157 16.9047 17.5048 16.9833C17.4866 17.1143 17.5159 17.2515 17.5746 17.5258L17.5955 17.6237C17.7007 18.1156 17.7533 18.3615 17.6876 18.4824C17.6287 18.591 17.5201 18.6605 17.4001 18.6665C17.2666 18.6731 17.0784 18.514 16.702 18.1957C16.4541 17.986 16.3301 17.8812 16.1924 17.8402C16.0667 17.8028 15.9333 17.8028 15.8075 17.8402C15.6699 17.8812 15.5459 17.986 15.2979 18.1957C14.9216 18.514 14.7334 18.6731 14.5998 18.6665C14.4799 18.6605 14.3713 18.591 14.3123 18.4824C14.2467 18.3615 14.2993 18.1156 14.4044 17.6237L14.4254 17.5258C14.484 17.2515 14.5133 17.1143 14.4951 16.9833C14.4842 16.9047 14.4609 16.8285 14.4262 16.7577C14.3683 16.6397 14.2682 16.5452 14.0679 16.3561L13.949 16.2438C13.5207 15.8394 13.3065 15.6372 13.336 15.4441C13.3421 15.4041 13.3546 15.3655 13.3731 15.3298C13.462 15.1574 13.7533 15.1303 14.336 15.0762C14.6801 15.0442 14.8522 15.0282 14.9901 14.942C15.0287 14.9178 15.065 14.8898 15.0985 14.8583C15.2178 14.7461 15.2815 14.5812 15.409 14.2514Z" fill="white" stroke="white"/>
        </svg>

      <div class="logo-text">CinemaTIX</div>
    </div>
    <div class="nav-links">
      <div class="nav-item"><a href="#">Movies</a></div>
      <div class="nav-item"><a href="#">Ticket</a></div>
      <div class="nav-item"><a href="#">Promo</a></div>
      <div class="nav-item"><a href="#">Locations</a></div>
    </div>
    <div class="user-buttons">
      <div class="primary-btn"><a href="#">Hasan</a></div>
      <div class="secondary-btn"><a href="#">Log out</a></div>
    </div>
  </header>

    <!-- Begin page content -->
    <div class="movie-card">
      <div class="poster">
        <img src="https://i.pinimg.com/564x/21/da/f1/21daf1af175109cd9d6064fd13514b5e.jpg">
      </div>
           
            <hr />
                <?php
                foreach ($movies as $row) {
                ?>
                    <div class="movie-details">
                    <div class="text-wrapper"><?= $row->release_date; ?></div>
                    <p class="stranger-things"><?= $row->title; ?></p>
                    <div class="description">
                    <p>
                    <?= $row->description; ?>
                    </p>
                    </div>
                    <a href="<?= base_url("/dashboard/detail/bayar/$row->harga"); ?>"><button type="button">
                    <div class="label">Buy Tickets</div>
                    </a>
                    </div>
                <?php
                }
                
                ?>
         
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>