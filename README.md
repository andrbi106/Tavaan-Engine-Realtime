# Tavaan Engine — Realtime

> **بلادرنگ** — موتور Realtime در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.realtime` |
| نام | `Realtime` |
| عنوان فارسی | بلادرنگ |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Realtime` |
| نوع | `engine` |
| Facade | Broadcast (`broadcast`), Realtime (`realtime.facade`) |

## توضیحات

M6 — SSE بدون هیچ ext (StreamedResponse + heartbeat + retry)، WebSocket خودنوشته RFC 6455 (handshake/accept-key، frame codec با mask اجباری client، fragmentation، ping/pong، Origin check)، brokerها: Array/Database(polling با TTL prune)/Redis(bازاستفاده از RedisClient صف با seq سراسری و fallback خودکار)، ChannelRegistry با {param}/wildcard، احراز کانال خصوصی (POST /broadcasting/auth + توکن HMAC)، Presence با cache TTL، قلاب ShouldBroadcast در EventDispatcher، routes/channels.php.

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Realtime\Contracts\BrokerInterface`
- `Tavaan\Engine\Realtime\Contracts\ShouldBroadcast`

## خطاها (Exceptions)

- `Tavaan\Engine\Realtime\Exceptions\RealtimeException`

## Facadeها

- `Tavaan\Engine\Realtime\Facades\Broadcast`
- `Tavaan\Engine\Realtime\Facades\Realtime`

## کلاس‌های اصلی

- `src/Broadcast.php`
- `src/BroadcastingAuthController.php`
- `src/Brokers/ArrayBroker.php`
- `src/Brokers/DatabaseBroker.php`
- `src/Brokers/RedisBroker.php`
- `src/ChannelRegistry.php`
- `src/Console/RealtimeWebSocketCommand.php`
- `src/PresenceManager.php`
- `src/RealtimeFacadeRoot.php`
- `src/Sse/SseStreamer.php`
- `src/WebSocket/WebSocketFrame.php`
- `src/WebSocket/WebSocketProtocolException.php`
- `src/WebSocket/WebSocketServer.php`
- `src/realtime.php`

## Service Providerها

- `Tavaan\Engine\Realtime\RealtimeManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `event`
- `http`

**موتورهای اختیاری:**

- `database`
- `cache`
- `queue`
- `auth`

## دستورات CLI

- `realtime:websocket`

## پیکربندی

- فایل پیکربندی: `config/realtime.php`
- کلید: `realtime`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Realtime.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Realtime`** (این مخزن) | موتور Realtime |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
