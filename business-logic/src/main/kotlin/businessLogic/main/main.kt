import businessLogic.management.*
import businessLogic.user.*

fun main(){
    var currentUser = login("jjscherer", "54321")
    currentUser = currentUser as Customer
    currentUser.status = AccountStatus.ACTIVE
    println(currentUser.status)
}

fun login(username: String, password: String) : User?{
    // check db for account
    val exists = true
    if(exists){
        //if statements checking for account type, just assume customer for now
        return Customer(username)
    }
    return null
}

fun adminLoop(){}
fun customerLoop(){}