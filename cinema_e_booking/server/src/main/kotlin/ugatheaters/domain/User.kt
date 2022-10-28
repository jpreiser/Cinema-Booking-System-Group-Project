package ugatheaters.domain

import kotlinx.serialization.Serializable

@Serializable
open class User(var userName: String){
    var password: String? = null
    var loginStatus: Boolean? = null
    var accountType: AccountType? = null
}

@Serializable
class Customer(var user: String, val email: String) : User(user){
    var firstName: String? = null
    var lastName: String? = null
    var accountStatus: AccountStatus? = null
    val name get() = "$firstName $lastName"
}

@Serializable
class Admin(var user: String) : User(user)

@Serializable
enum class AccountStatus{
    ACTIVE, INACTIVE, SUSPENDED
}

@Serializable
enum class AccountType{
    CUSTOMER, ADMIN
}

var currentUsers = mutableListOf<User>(Customer("yellowjs", "johnjosephscherer@gmail.com"))
