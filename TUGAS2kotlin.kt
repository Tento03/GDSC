import java.util.Scanner

interface GameSuit {
    fun play(playerChoice: Int): String
}

enum class Suit(val value: Int) {
    BATU(1),
    KERTAS(2),
    GUNTING(3)
}

// Class Player
open class Player(var nama: String) {
    var score = 0
    
    // Method untuk memilih suit
    fun chooseSuit(): Suit {
        println("$nama, pilih yang anda inginkan:")
        println("1. Batu")
        println("2. Kertas")
        println("3. Gunting")
        val scanner = Scanner(System.`in`)
        val pilihan = scanner.nextInt()
        return when (pilihan) {
            1 -> Suit.BATU
            2 -> Suit.KERTAS
            3 -> Suit.GUNTING
            else -> {
                println("Pilihan tidak tersedia,ulang lagi")
                chooseSuit()
            }
        }
    }
}

class ComputerPlayer : Player("Computer") {
    fun chooseRandomSuit(): Suit {
        return Suit.values().random()
    }
}

class Game(private val player1: Player, private val player2: Player) : GameSuit {
    override fun play(player1Choice: Int): String {
        val player1Suit = player1.chooseSuit()
        val player2Suit = player2.chooseSuit()
        val result = calculateResult(player1Suit, player2Suit)
        updateScore(result)
        return result
    }

    private fun calculateResult(player1Suit: Suit, player2Suit: Suit): String {
        return when {
            player1Suit == player2Suit -> "Imbang!"
            player1Suit == Suit.BATU && player2Suit == Suit.GUNTING ||
                    player1Suit == Suit.KERTAS && player2Suit == Suit.BATU ||
                    player1Suit == Suit.GUNTING && player2Suit == Suit.KERTAS -> "${player1.nama} menang!"
            else -> "${player2.nama} menang!"
        }
    }

    private fun updateScore(result: String) {
        when (result) {
            "${player1.nama} menang!" -> player1.score++
            "${player2.nama} menang!" -> player2.score++
        }
        println("${player1.nama} score: ${player1.score}")
        println("${player2.nama} score: ${player2.score}")
    }
}

class User(var username: String, var password: String)

class LoginSystem {
    private val users = mutableListOf<User>()

    fun register() {
        val scanner = Scanner(System.`in`)
        println("Enter your username:")
        val username = scanner.nextLine()
        println("Enter your password:")
        val password = scanner.nextLine()
        users.add(User(username, password))
        println("Registration successful!")
    }

    fun login(): User? {
        val scanner = Scanner(System.`in`)
        println("Enter your username:")
        val username = scanner.nextLine()
        println("Enter your password:")
        val password = scanner.nextLine()
        for (user in users) {
            if (user.username == username && user.password == password) {
                println("Login successful!")
                return user
            }
        }
        println("Invalid username or password.")
        return null
    }
}

fun main() {
    val loginSystem = LoginSystem()
    var currentUser: User? = null
    val scanner = Scanner(System.`in`)
    var exit = false
    while (!exit) {
        println("Welcome to Login System!")
        println("1. Register")
        println("2. Login")
        println("3. Exit")
        val choice = scanner.nextInt()
        when (choice) {
            1 -> loginSystem.register()
            2 -> currentUser = loginSystem.login()
            3 -> exit = true
            else -> println("Invalid choice.")
        }
        if (currentUser != null) {
            val playerName = scanner.nextLine()
    val player = Player(playerName)
            println("Logged in as ${currentUser.username}.")
            val game = Game(player, ComputerPlayer())
    var playAgain = true
    while (playAgain) {
        println("Mulai!")
        
        val result = game.play(player.chooseSuit().value)
        println(result)
        println("Ulang? (y/n)")
        val playAgainInput = scanner.nextLine()
        playAgain = playAgainInput.equals("y", ignoreCase =true)
    }
    println("Terimakasih sudah bermain!")
    }

        }
    }
    
    

    