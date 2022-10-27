import io.ktor.http.*
import io.ktor.serialization.kotlinx.json.*
import io.ktor.server.engine.*
import io.ktor.server.netty.*
import io.ktor.server.application.*
import io.ktor.server.plugins.compression.*
import io.ktor.server.plugins.contentnegotiation.*
import io.ktor.server.plugins.cors.routing.*
import io.ktor.server.request.*
import io.ktor.server.response.*
import io.ktor.server.routing.*
import domain.*
import io.ktor.server.http.content.*

fun main() {
    embeddedServer(Netty, 9090) {
        install(ContentNegotiation) {
            json()
        }
        install(CORS) {
            allowMethod(HttpMethod.Get)
            allowMethod(HttpMethod.Post)
            allowMethod(HttpMethod.Delete)
            anyHost()
        }
        install(Compression) {
            gzip()
        }
        routing {
            get("/") {
                call.respondText(
                    this::class.java.classLoader.getResource("index.html")!!.readText(),
                    ContentType.Text.Html
                )
            }
            static("/") {
                resources("")
            }
            route(Movie.path){
                /*get{
                    call.respond(movies)
                }
                post{
                    movies.add(call.receive<Movie>())
                    call.respond(HttpStatusCode.OK)
                }
                delete("/{id}"){
                    val id = call.parameters["id"]?.toInt() ?: error("Invalid delete request")
                    movies.removeIf {it.id == id}
                    call.respond(HttpStatusCode.OK)
                }*/
            }
        }
    }.start(wait = true)
}

val users = mutableListOf<User>()