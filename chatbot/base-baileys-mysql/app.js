const { createBot, createProvider, createFlow, addKeyword } = require('@bot-whatsapp/bot');
const QRPortalWeb = require('@bot-whatsapp/portal');
const BaileysProvider = require('@bot-whatsapp/provider/baileys');
const MySQLAdapter = require('@bot-whatsapp/database/mysql');

// Configuración de MySQL
const MYSQL_DB_HOST = '127.0.0.1';
const MYSQL_DB_USER = 'root';
const MYSQL_DB_PASSWORD = '123456';
const MYSQL_DB_NAME = 'boot';
const MYSQL_DB_PORT = '3306';

// Definición del flujo principal con botones
const flowPrincipal = addKeyword(['hola', 'hola chatbot', 'hola Date Vida', 'buenos días', 'buenas tardes', 'buenas noches', 'saludos', 'inicio'])
    .addAnswer('¡Hola! Soy el asistente virtual de Date Vida ☕. ¿En qué puedo ayudarte hoy?')

// Función principal para configurar el bot
const main = async () => {
    const adapterDB = new MySQLAdapter({
        host: MYSQL_DB_HOST,
        user: MYSQL_DB_USER,
        database: MYSQL_DB_NAME,
        password: MYSQL_DB_PASSWORD,
        port: MYSQL_DB_PORT,
    });

    const adapterFlow = createFlow([flowPrincipal]);
    const adapterProvider = createProvider(BaileysProvider);

    createBot({
        flow: adapterFlow,
        provider: adapterProvider,
        database: adapterDB,
    });

    const PORT = process.env.PORT || 4001;

    QRPortalWeb({ port: PORT });
};

main().catch((err) => {
    console.error('Error al iniciar el bot:', err);
});
