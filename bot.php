
curl -X POST \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer p2tNOuR1m5zaEpjpvWf61x5TBrKEsjhqrXmBwmVpG8XqA2ui4/Ww2HTQaQEJO4rQDwzZnQ2dCycskHDFRuzs3AfEDvnB7m3a3VMuLIkrYcq3WCcixq7ElnrdrAHcJ4c3N+n5eUzSCoNUWZjrNeyj9QdB04t89/1O/w1cDnyilFU=' \
-d '{
    "replyToken":"nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
    "messages":[
        {
            "type":"text",
            "text":"Hello, user"
        },
        {
            "type":"text",
            "text":"May I help you?"
        }
    ]
}' https://api.line.me/v2/bot/message/reply
