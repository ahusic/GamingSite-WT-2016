<?php
session_start();
class Redirect{
	public  function to($location=null){
		if($location){
			header('Location: ' .$location);
			exit();
		}
	}
}
class Session{
	public static function set($username){
		if(!isset($_SESSION['name'])){
			$_SESSION['name'] = $username;
			return true;
		}return false;
	}
	public  static function isitset(){
		if(isset($_SESSION['name'])) return $_SESSION['name'];
		return false;
	}
	public function destroy(){
		session_destroy();
		Redirect::to('index.php');
	}
}
class User{
	private $id, $name,$loggedin, $surname, $username, $password, $connection, $session, $admin;
	public function __construct($username = null){
		try{
			$this->connection = new PDO('mysql:host=localhost;dbname=gaming','root','');
			$this->connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch (PDOException $exception){
			echo $exception;
		}
		$query = $this->connection ->query('SELECT * FROM users');
		if(!$username && $this->session = Session::isitset()){
			while($row = $query->fetch()){
				if($row['username'] == $this->session){
					$this->id = $row['id'];
					$this->name = $row['name'];
					$this->surname = $row['surname'];
					$this->username = $row['username'];
					$this->loggedin = Session::set($username);
					$this->admin = $row['admin'];
				}
			}
		}else{
			while($row = $query->fetch()){
				if($row['username'] == $username){
					$this->id = $row['id'];
					$this->name = $row['name'];
					$this->surname = $row['surname'];
					$this->username = $row['username'];
					$this->loggedin = Session::set($username);
				}
			}
		}
	}
	public function registerUser($name, $surname, $username, $password){
		$insert = "INSERT INTO `users`(`name`, `surname`, `username`, `password`) 
		VALUES ('{$name}','{$surname}','{$username}','{$password}')";
		$this->connection->query($insert);
	}
	public function login($username, $password){
		$query = $this->connection ->query('SELECT * FROM users');
		while($row = $query->fetch()){
			if($row['username'] == $username && $row['password'] == $password){
				Session::set($username);
			}
		}
	}
	public function isLoggedIn(){
		if(Session::isitset()) return true;
		return false;
	}
	public function zabrani($id){
		$a = 1;
		echo $ajdi = $id;
		$update = $this->connection->query("UPDATE `status` 
			SET `aaaa`='{$a}' WHERE id=$ajdi");
	}
	public function username(){
		echo $this->username;
	}
	//UPDATE `slides` SET `date`='{$date}',`picture`='{$file}' WHERE id=$id"
	public function update($password){
		$id = $this->id;
		$update = $this->connection->query("UPDATE `users` SET `password`='{$password}' WHERE id=$id");
	}
	public function updateUser($id, $name, $surname){
		$ajdi = $id;
		$name;
		$update = $this->connection->query("UPDATE `users` 
			SET `name`='{$name}',`surname`='{$surname}' WHERE id=$ajdi");
	}
	public function insertStatus($header,$contet, $glupsot = null){
		$id = $this->username;
		$date = date('Y-m-d H:i:s');
		$notification = 0;
		if($glupsot == 0){
			$insert = "INSERT INTO `status`(`header`,`status`, `date`, `user`, `notification`)VALUES ('{$header}','{$contet}','{$date}','{$id}','{$notification}')";
		$this->connection->query($insert);
		}else{
			$insert = "INSERT INTO `status`(`header`,`status`, `date`, `user`, `notification`, `aaaa`)VALUES ('{$header}','{$contet}','{$date}','{$id}','{$notification}','{$glupsot}')";
		$this->connection->query($insert);
		}
	}

	public function ispisiSveVijesti(){
		$query = $this->connection ->query('SELECT * FROM status ORDER BY id DESC');
		while($row = $query->fetch()){ ?>
			<tr>
				<td>
					<h4>
						<span><a style="color:black;" href="profile.php?user=<?php echo $row['user']; ?>">
							<?php echo $row['user']; ?>
							</a>
						</span>
						<a id="linktostatus" href="singlenew.php?id=<?php echo $row['id']; ?>">
							<?php echo $row['header']; ?>
						</a>
						<span id="dateOfNew"><?php echo $row['date']; ?></span>
					</h4>
					<p>
						<?php echo $row['status']; ?>
					</p>
				</td>
			</tr>
	<?php	}
	}
	public function ispisiSveVijestiALI($id){
		$query = $this->connection ->query('SELECT * FROM status ORDER BY id DESC');
		while($row = $query->fetch()){ 
			if($row['user'] == $id){
			?>
			<tr>
				<td>
					<h4>
						<span><?php echo $row['user']; ?> </span>
						<a id="linktostatus" href="singlenew.php?id=<?php echo $row['id']; ?>">
							<?php echo $row['header']; ?>
						</a>
						<span id="dateOfNew"><?php echo $row['date']; ?></span>
					</h4>
					<p>
						<?php echo $row['status']; ?>
					</p>
				</td>
			</tr>
	<?php	} 
	}
	}
	public function ispisiPosebnuVijest($id){
		$query = $this->connection ->query('SELECT * FROM status');
		while($row = $query->fetch()){
			if($row['id']==$id){ ?>
				<td>
					<h4>
						<span class="userAJDIII"><?php echo $row['user']; ?></span>
						<?php echo $row['header']; ?>
						<span id="date"><?php echo $row['date']; ?></span>
						
				<?php
					if($this->username == $row['user'] && $this->isLoggedIn() || $this->admin){ ?>
						<span id="date">
							<form method="post">
							<input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
							<input type="submit" value="delete">
							</form>
						</span><span id="date">
							<form method="post">
							<input type="hidden" name="zabrani" value="<?php echo $row['id']; ?>">
							<input type="submit" value="Zabrani komentare">
							</form>
						</span>
					<?php }
				?>
					</h4>
					<h4>
						<?php echo $row['status']; ?>
					</h4>
					<?php
					$queryy = $this->connection ->query('SELECT * FROM comment');
						while($roww = $queryy->fetch()){
							if($roww['statusID'] == $id){ ?>
			<h5>
				<span class="userAJDIII"><?php echo $roww['user']; ?>
					<?php 
						if($this->admin){ ?>
							<form method="post">
								<input type="hidden" name="nemaime" value="<?php echo $roww['id']; ?>">
								<input id="weeehsadsa" type="submit" value="delete">
							</form>
					<?php	}
					?>
				</span>
				<?php echo $roww['comment']; ?>
				<?php 
					$queryyy = $this->connection ->query('SELECT * FROM comment');
						while($rowww = $queryyy->fetch()){
							if($rowww['comentId'] == $roww['id']){ ?>
			<p>
				<span class="userAJDIII"><?php echo $rowww['user']; ?></span>
				 <?php echo $rowww['comentOfComent']; ?>
			</p>
						<?php	}
						}
				?>
				
				<form method="post">
					<input type="text" name="commentComment" placeholder="komentarišite">
					<input type="hidden" name="idOFComent" value="<?php echo $roww['id']; ?>">
					<input type="submit" value="odgovori">
				</form>
			</h5>
						<?php	}
						}
					?>
					<?php 
					if($row['aaaa']!=1){ ?>
						<form method="post">
						<input type="text" name="comment" placeholder="komentarišite">
						<input type="submit" value="komentariši">
					</form>
					<?php }

					?>
				</td>
			<?php }
		}
	}
	public function deleteStatus($id){
		$delete = "DELETE FROM `status` WHERE id = $id";
		$this->connection->query($delete);
		Redirect::to('index.php');
	}
	public function deleteComent($id, $location){
		$delete = "DELETE FROM `comment` WHERE id = $id";
		$this->connection->query($delete);
		Redirect::to('singlenew.php?id='.$location);
	}
	public function commentStatus($comment, $id){
		$this->updateStatus($id);
		$date = date('Y-m-d H:i:s');
		$user = $this->username;
		$notification = 0;
		$insert = "INSERT INTO `comment`(`comment`, `date`, `user`, `statusID`) 
		VALUES ('{$comment}','{$date}','{$user}','{$id}')";
		$this->connection->query($insert);
	}
	public function updateStatus($id){
		$query = $this->connection ->query('SELECT * FROM status ORDER BY id DESC');
		while($row = $query->fetch()){
			if($row['id'] == $id) $nesto = $row['notification'];
		}
		$nesto++;
		$update = $this->connection->query("UPDATE `status` SET `notification`='{$nesto}' WHERE id = $id");
	}
	public function comentComent($comentComent, $id){
		$date = date('Y-m-d H:i:s');
		$user = $this->username;
		$notification = 0;
		$insert = "INSERT INTO `comment`(`comentOfComent`, `date`, `user`, `comentId`) 
		VALUES ('{$comentComent}','{$date}','{$user}','{$id}')";
		$this->connection->query($insert);
	}
	public function displayMessage(){
		$query = $this->connection ->query('SELECT * FROM status');
		$notification =0;
		while($row = $query->fetch()){
			if($row['notification'] != 0 && $row['user'] == $this->username) {
				$notification += $row['notification'];
			}
		}

		return $notification;
	}
	public function isAdmin(){
		if($this->admin == 1) return true;
		return false;
	}
	public function displayNotificationsVia(){
		$query = $this->connection ->query('SELECT * FROM status');
		while($row = $query->fetch()){
			if($row['notification'] != 0 && $row['user'] == $this->username) { ?>
				<a id="wee" href="singlenew.php?id=<?php echo $row['id']; ?>" >
					<?php echo $row['header'] ?> je komentarisana 
					<?php echo $row['notification']; ?>  puta
				</a><br>
		<?php
			}
		}
		$query = $this->connection ->query('SELECT * FROM status');
		while($row = $query->fetch()){
			$nula = 0;
			if($row['notification'] != 0 && $row['user'] == $this->username) {
				$id = $row['id'];
				$update = $this->connection->query("UPDATE `status` SET `notification`='{$nula}' WHERE id=$id");
			}
		}
	}
	public function displaySpecific($id){
		$query = $this->connection ->query('SELECT * FROM status ORDER BY id DESC');
		while($row = $query->fetch()){
			if($row['id'] == $id){
				echo $row['status'].'<br>';
				$comment = $this->connection->query('SELECT * FROM comment');
				while($comm = $comment->fetch()){
						if($comm['statusID'] == $row['id']){
							echo '<span>'.$comm['user'].' '.$comm['comment'].'<span>'; ?>
								<form method="post">
									<input type="text" name="commentComment">
									<input type="hidden" name = "idOFComent"
									 value="<?php echo $comm['id']; ?>">
									<input type="submit" value="comment">
									<br>
								</form>
							<?php
							$coomOfComm = $this->connection->query('SELECT * FROM comment');
							while($commOfComm = $coomOfComm->fetch()){
								if($commOfComm['comentId'] == $comm['id']){
									echo '<h5>'.$commOfComm['user'].' '.$commOfComm['comentOfComent'].'</h5>';
									$coomOfComm = $this->connection->query('SELECT * FROM comment');
							while($commOfComm = $coomOfComm->fetch()){
								if($commOfComm['comentId'] == $comm['id']){
									echo '<h5>'.$commOfComm['user'].' '.$commOfComm['comentOfComent'].'</h5>';
								}
							}
								}
							}
						}
					}
			}
		}
		$query = $this->connection ->query('SELECT * FROM status');
		while($row = $query->fetch()){
			$nula = 0;
			if($row['notification'] != 0 && $row['user'] == $this->username) {
				$id = $row['id'];
				$update = $this->connection->query("UPDATE `status` SET `notification`='{$nula}' WHERE id=$id");
			}
		}
	}

	public function writeUsers(){
		$query = $this->connection ->query('SELECT * FROM users');
		while($row = $query->fetch()){
			echo $row['username'].'<br>'; ?>
			<form method="post">
				<input type="text" name="updateName" value="<?php echo $row['name']; ?>">
			<input type="text" name="updateSurname" value="<?php echo $row['surname']; ?>">
			<input type="hidden" name="updateId" value="<?php echo $row['id']; ?>">
				<input type="submit" value="update">
			</form>
		<?php }
	}
}
