<template>
    <div class="fixed flex w-full h-full left-0 top-0 bg-gray-500 bg-opacity-50">
        <div class="w-full h-11/12 m-8 p-4 overflow-x-auto overscroll-contain bg-gray-200">
            <div class="mb-4">
                modal
                <button-primary type="button" @click="close()">Close</button-primary>
            </div>
            <files :eventName="eventName" :filesConfig="filesConfig"></files>
        </div>
    </div>    
</template>

<script>
    import { eventBus } from '@/app'

    import Files from '@/components/Admin/Files/Files'
    import ButtonPrimary from '@/components/Admin/ButtonPrimary'

    export default {
        components: {
            Files,
            ButtonPrimary,
        },
        props: {
            eventName: {
                type: String,
                default: 'default'
            },
            filesConfig: Object,
        },
        methods: {
            close() {
                eventBus.$emit('closeFilesModal')
            }
        }
    }
</script>
