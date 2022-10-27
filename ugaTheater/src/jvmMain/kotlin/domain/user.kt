import kotlinx.serialization.Serializable
import java.time.YearMonth

@kotlinx.serialization.Serializable
open class User(var userName: String){
    var loginStatus: Boolean? = null
    var passWord: String? = null

    val id = userName.hashCode()

    companion object{
        const val path = "/user"
    }
}

@kotlinx.serialization.Serializable
class Customer(var user: String) : User(user){
    var firstName: String? = null
    var lastName: String? = null
    val email: String? = null
    var status: AccountStatus? = null
}

@kotlinx.serialization.Serializable
class Admin(var user: String) : User(user){
    val adminID: Int? = null
}

@kotlinx.serialization.Serializable
enum class AccountStatus{
    ACTIVE, INACTIVE, SUSPENDED
}

@kotlinx.serialization.Serializable
class CardInfo(val number: String){
    var ccv: String? = null
    var expiration: String? = null
    var billingAddress: String? = null
}

