package ugatheaters

import io.ktor.server.engine.*
import io.ktor.server.netty.*
import ugatheaters.plugins.*
import ugatheaters.domain.*

fun main() {
    embeddedServer(Netty, port = 9090, host = "0.0.0.0") {
        configureSockets()
        configureSerialization()
        configureHTTP()
        configureSecurity()
        configureRouting()
    }.start(wait = true)
}

var currentUsers = mutableListOf<User>()
