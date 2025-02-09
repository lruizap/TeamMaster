# TeamMaster ⚽💼  

TeamMaster is a **server-side web application** built with **PHP (MVC pattern)** for managing football teams, players, and coaches. The application allows user interaction through a clean and structured interface using **FastRoute, PDO, and Bootstrap**.  

## 🚀 Features  

- Manage **coaches**, **teams**, and **players**  
- Assign players to teams (with a max limit)  
- Transfer or dismiss players  
- Full MVC architecture with structured controllers, models, and views  
- Uses **FastRoute** for routing and **PDO** with prepared statements for database security  

---

## 🛠️ Technologies Used  

- **PHP 8+** (MVC architecture)  
- **MySQL** (database management)  
- **FastRoute** (efficient routing)  
- **Bootstrap** (UI styling)  
- **PHP dotenv** (secure environment configuration)  

---

## 📂 Project Structure  

```markdown

/TeamMaster
│── /model        # Database models  
│   ├── Model.php  
│   ├── equipoM.php  
│   ├── jugadorM.php  
│
│── /controller   # Controllers (handling app logic)  
│   ├── equipoController.php  
│   ├── jugadorController.php  
│
│── /view         # Views (HTML & Bootstrap UI)  
│   ├── detalleEntrenador.php  
│   ├── detalleJugador.php  
│   ├── traspasoJugador.php  
│   ├── insertarJugador.php  
│
│── /config       # Database configuration  
│   ├── database.php  
│
│── /public       # Public folder (index.php and static assets)  
│   ├── index.php  
│
│── /vendor       # External libraries (installed via Composer)  
│
│── .env          # Environment variables (database credentials)  
│── composer.json # Composer dependencies  
│── README.md     # Project documentation  

```

---

## ⚡ Installation  

### 📌 Prerequisites  

Make sure you have installed:  
✔ **PHP 8+**  
✔ **MySQL**  
✔ **Composer**  

### 📌 Setup  

1️⃣ **Clone the repository**  

```sh
git clone https://github.com/lruizap/TeamMaster.git
cd TeamMaster
```

2️⃣ **Install dependencies**  

```sh
composer install
```

3️⃣ **Configure the database**  

- Create a MySQL database named **`futbol_db`**  
- Import the SQL file (`database.sql`) or run the script manually  
- Set up the `.env` file with database credentials:  

```env
DB_HOST=localhost
DB_NAME=futbol_db
DB_USER=root
DB_PASS=yourpassword
```

4️⃣ **Run the local server**  

```sh
php -S localhost:8000 -t public
```

5️⃣ **Open in your browser**  

```
http://localhost:8000/
```

---

## 🎯 Usage  

- **View an entrenador's teams:**  

  ```
  http://localhost:8000/entrenador/{id}
  ```

- **View a team's players:**  

  ```
  http://localhost:8000/equipo/{id}
  ```

- **Transfer a player:**  
  - Click "Transfer" → Select a new team  
- **Dismiss a player:**  
  - Click "Dismiss" → Confirm removal  
- **Sign a new player:**  
  - Click "Sign Player" → Fill out form  

---

## 📞 Contact  

Developed by **lruizap**  
📧 **Email:** <lruizap@gmail.com>  
🔗 **GitHub:** [github.com/lruizap](https://github.com/lruizap)  

---

## 📜 License  

This project is licensed under the **MIT License** – see the [LICENSE](LICENSE) file for details.  
