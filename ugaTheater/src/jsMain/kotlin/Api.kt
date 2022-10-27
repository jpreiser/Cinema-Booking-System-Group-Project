import io.ktor.http.*
import io.ktor.client.*
import io.ktor.client.call.*
import io.ktor.client.plugins.contentnegotiation.*
import io.ktor.client.request.*
import io.ktor.serialization.kotlinx.json.*
import domain.*

import kotlinx.browser.window

val endpoint = window.location.origin // only needed until https://youtrack.jetbrains.com/issue/KTOR-453 is resolved

val jsonClient = HttpClient {
    install(ContentNegotiation) {
        json()
    }
}

suspend fun getUsers(): List<User> {
    return jsonClient.get(endpoint + User.path).body()
}

/*suspend fun addShoppingListItem(shoppingListItem: Movie) {
    jsonClient.post(endpoint + Movie.path) {
        contentType(ContentType.Application.Json)
        setBody(shoppingListItem)
    }
}

suspend fun deleteShoppingListItem(shoppingListItem: Movie) {
    jsonClient.delete(endpoint + Movie.path + "/${movie.id}")
}*/