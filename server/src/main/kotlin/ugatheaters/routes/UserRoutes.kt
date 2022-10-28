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
                call.respondText("No users found", status = HttpStatusCode.OK)
            }
        }
        post {
            val user = call.receive<User>()
            currentUsers.add(user)
            call.respondText("Customer stored correctly", status = HttpStatusCode.Created)
        }
    }
}