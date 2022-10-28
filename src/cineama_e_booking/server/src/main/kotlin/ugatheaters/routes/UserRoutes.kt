package ugatheaters.routes

import io.ktor.server.routing.*
import io.ktor.http.*
import io.ktor.server.application.*
import io.ktor.server.response.*
import io.ktor.server.request.*
import ugatheaters.domain.*

fun Route.userRouting() {
    route("/user") {
        get {
            if (currentUsers.isNotEmpty()) {
                call.respond(currentUsers)
            } else {
                call.respondText("No customers found", status = HttpStatusCode.OK)
            }
        }
        get("{userName?}") {
            val userName = call.parameters["userName"] ?: return@get call.respondText(
                "Missing user id",
                status = HttpStatusCode.BadRequest
            )
            val customer =
                currentUsers.find { it.userName == userName } ?: return@get call.respondText(
                    "No user with userName $userName",
                    status = HttpStatusCode.NotFound
                )
            call.respond(customer)
        }
        post {
            val user = call.receive<User>()
            currentUsers.add(user)
            call.respondText("User stored correctly", status = HttpStatusCode.Created)
        }
        delete("{userName?}") {
            val userName = call.parameters["userName"] ?: return@delete call.respond(HttpStatusCode.BadRequest)
            if (currentUsers.removeIf { it.userName == userName }) {
                call.respondText("Customer removed correctly", status = HttpStatusCode.Accepted)
            } else {
                call.respondText("Not Found", status = HttpStatusCode.NotFound)
            }
        }
    }
}