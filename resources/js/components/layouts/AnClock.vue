<template>
  <div class="header-anunce-clock-time">
    <div class="div-time">
      <span>
        <i class="fas fa-clock"></i>
      </span>
      <span id="date_time">{{ display }}</span>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      time: Date.now()
    };
  },
  computed: {
    display() {
      return moment(this.time)
        .locale("es")
        .format("MMMM dddd YYYY, h:mm:ss a");
    }
  },
  created() {
    setInterval(() => {
      this.time = Date.now();
    }, 1000);
  }
};
</script>
