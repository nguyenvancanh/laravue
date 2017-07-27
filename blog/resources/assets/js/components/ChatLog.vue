<template lang="html">
    <div class="chat-log">
        <chat-message v-for= "message in messages" :message="message"></chat-message>
        <div class="empty" v-show="messages.length === 0">
            Nothing hear!
        </div>
    </div>
</template>

<script>
    export default {
        props: ['messages']
    }
</script>

<style lang="css">
    .chat-log .chat-message:nth-child(even) {
        background: #ccc;
    }

    .empty {
        padding: 1px;
        text-align: center;
    }
</style>
